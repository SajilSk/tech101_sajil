<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['name','email','password','address'];

    public static function getStudent(){
        $records = DB::table('students')->select('id','name','email','address')->get()->toArray();
        return $records;
    }

}
