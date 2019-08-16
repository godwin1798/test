<?php

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
    return view('auth.login');
});

Auth::routes();
// guest
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getColleges','landingController@getColleges')->name('getColleges');
Route::post('/getProgByColleges','landingController@getProgByColleges')->name('getProgByCollege');
Route::post('/getAttainments','landingController@attainment')->name('attainments');

// account create of guest
Route::post('/user/signup', 'Auth\RegisterController@create')->name('saveUser');
// admin  routes
Route::get('/admin/dash','adminController@dashboard')->name('admindash');
// route for colleges and programs
Route::get('/admin/colleges','adminController@colleges')->name('colleges'); 
Route::post('/addCollege','adminController@addCollege')->name('addCollege');
Route::get('/displayCollege','adminController@displayCollege')->name('displayCollege');
Route::post('/deleteCollege','adminController@deleteCollege')->name('deleteCollege');
Route::post('/updateCollege','adminController@updateCollege')->name('updateCollege');
Route::post('/addProgram','adminController@addProgram')->name('addProgram');
Route::get('/displayProg','adminController@displayProg')->name('displayProg');
Route::post('/removeProgram','adminController@removeProgram')->name('removeProgram');
Route::post('/updateProg','adminController@updateProg')->name('updateProg');

