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
    return view('welcome');});
//routs for registration and show data in table 
Route::get('/register','CustomerController@show');
Route::post('/customertable','CustomerController@insert');
Route::get('/table','CustomerController@list');

//routs for registration and show data in table 
Route::get('/customertable','CustomerController@list');/// the old was put 
Route::get('/edituser/{id}','CustomerController@edit');
Route::post('/update/{id}','CustomerController@update');


Route::get('/deleteuser/{id}','CustomerController@delete');


Route::get('/admin','CustomerController@show2');
Route::post('/logintable','CustomerController@insert2');




Route::get('/grid','CustomerController@show3');
Route::get('trainee/{id}','CustomerController@trainee');