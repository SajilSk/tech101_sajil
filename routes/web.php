<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', 'App\Http\Controllers\StudentController@index')->name('index');

Route::post('/login', 'App\Http\Controllers\StudentController@checkLogin')->name('login');

Route::get('/add-student-form', 'App\Http\Controllers\StudentController@add')->middleware('can:add,App\Models\User')->name('add.student.form');

Route::get('/list-student-form', 'App\Http\Controllers\StudentController@list')->middleware('can:list,App\Models\User')->name('list.student');

Route::post('/store-student-form', 'App\Http\Controllers\StudentController@studentStore')->middleware('can:store,App\Models\User')->name('student.store');

Route::get('/edit-student-form/{id}', 'App\Http\Controllers\StudentController@studentEdit')->middleware('can:edit,App\Models\User')->name('student.edit');

Route::post('/update-student-form/{id}', 'App\Http\Controllers\StudentController@studentUpdate')->middleware('can:update,App\Models\User')->name('student.update');

Route::get('/delete-student-form/{id}', 'App\Http\Controllers\StudentController@studentdelete')->middleware('can:delete,App\Models\User')->name('student.delete');

Route::get('/export-excel','App\Http\Controllers\StudentController@exportIntoExcel')->middleware('can:exportExcel,App\Models\User')->name('export.excel');

Route::get('/export-pdf','App\Http\Controllers\StudentController@studentPdf')->middleware('can:exportPdf,App\Models\User')->name('export.pdf');

Route::get('/student-pdf','App\Http\Controllers\StudentController@pdf')->middleware('can:studentPdf,App\Models\User')->name('student.pdf');

Route::get('/logout','App\Http\Controllers\StudentController@logout')->name('logout');









