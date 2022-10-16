<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StudentController;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('student/create', function () {
    return view('student_create');
});
Route::post('create',[StudentController::class,'create']);
Route::get('student/show',[StudentController::class,'get_all_student']);
Route::get('student/edit',[StudentController::class,'get_student_by_id']);
Route::post('student/update',[StudentController::class,'student_update']);
Route::get('student/delete',[StudentController::class,'delete']);




