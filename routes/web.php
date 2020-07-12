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

Route::get('/', 'MainController@welcome');
Route::get('/register', 'MainController@create');
Route::post('/register', 'MainController@store');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/about','MainController@about');
Route::get('/faq','MainController@faq');
Route::get('/contact','MainController@contact');
Route::post('/feedback','MainController@sendfeedback');
Route::get('/feedback','MainController@feedback');


Route::get('/score','ScoreController@score');
Route::post('/list','ScoreController@list');
