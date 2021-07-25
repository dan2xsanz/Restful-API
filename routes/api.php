<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//GET ALL
Route::get('students', 'App\Http\Controllers\StudentsController@index');
//GET SPECIFIC STUDENT
Route::get('students/{id}', 'App\Http\Controllers\StudentsController@show');
//ADD STUDENT
Route::post('addstudents', 'App\Http\Controllers\StudentsController@store');
//UPDATE STUDENTS
Route::put('updatestudents/{id}', 'App\Http\Controllers\StudentsController@update');
//DELETE STUDENTS
Route::delete('deletestudents/{id}', 'App\Http\Controllers\StudentsController@destroy');