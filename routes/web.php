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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('adminPortal');
});

Route::get('/askme', function () { return phpinfo(); });

Route::get('/studentRoster', function () { 
    return view('studentRoster'); 
});
Route::get('/newStudent', function () {
    return view('newStudent');
});

Route::post('/addStudent', 'App\Http\Controllers\StudentController@addStudent');
Route::post('/updateStudent', 'App\Http\Controllers\StudentController@updateStudent');
Route::post('/selectStudent', 'App\Http\Controllers\StudentController@selectStudent');
Route::post('/deleteStudent', 'App\Http\Controllers\StudentController@deleteStudent');
Route::get('/error', function() {
    return view('errorPage'); // Error Page.
});
