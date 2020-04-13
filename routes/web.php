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
    // return view('welcome');
    return 'project1';
});

Route::get('/test', function () {
    return App\Resume::all();
});

Route::resource('resumes', 'ResumesController');
Route::post('resumes/store', 'ResumesController@store');
Route::post('resumes/update', 'ResumesController@update');
