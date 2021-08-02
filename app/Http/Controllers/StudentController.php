<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Str;
use App\Exports\StudentExport;
use Excel;
use PDF;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function checkLogin(Request $request){
        
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3'

        ]);

        $user_data=array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data)){
            return view('dashboard');
        }
        else{
            return back()->with('error','Wrong Login details');

        }

    }

    public function add(){
        return view('add');
    }

    public function list(){
        $student=Student::all();
        return view('list',compact('student'));
    }

    public function studentStore(Request $request){

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token=Str::random(10);
        $user->save();

        $student=new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=bcrypt($request->password);
        $student->address=$request->address;
        $student->save();
        return redirect()->route('list.student')->with('success','Students added successfully');
        
    }

    public function studentEdit($id){
        $student_edit=Student::find($id);
        return view('edit',compact('student_edit'));

    }

    public function studentUpdate(Request $request,$id){
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->address=$request->address;
        $student->save();
        return redirect()->route('list.student')->with('update','Students updated successfully');
    }

    public function studentDelete($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('list.student')->with('delete','Student was successfully deleted');
    }

    public function exportIntoExcel(){
        return Excel::download(new StudentExport,'studentlist.xlsx');
    }

    public function pdf(){
        $student=Student::all();
        return view('student-pdf',compact('student'));
    }

    public function studentPdf(){
        $student=Student::all();
        $pdf = PDF::loadView('student-pdf',compact('student'));
        return $pdf->download('student.pdf');
    }

    public function getStudentApiList(){
        $student=Student::all();
        return response()->json([
            'success' => true,
            'student' => $student            
        ]);
    }

    public function updateStudentApiList(Request $request){
        $student=Student::find($request->id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->address=$request->address;
        $result=$student->save();
        if($result){
            return response()->json([
                'success' => true,
                'result' => "Data has been updated"            
            ]);

        }
        else{
            return response()->json([
                'success' => false,
                'result' => "Update operation has been failed"            
            ]);

        }
    }

    public function logout(){
        Auth::logout();
        return redirect('index');
    }


    


         

    





}
