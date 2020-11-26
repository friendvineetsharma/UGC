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

Route::get('/pd','detailcontroller@pd');
Route::get('/edu','detailcontroller@education');
Route::get('/exp','detailcontroller@experience');
Route::get('/research','detailcontroller@research');


Route::post('/pd','detailcontroller@savepd');
Route::post('/sd','detailcontroller@savesd');
Route::post('/ug','detailcontroller@saveug');
Route::post('/pg','detailcontroller@savepg');
Route::post('/od','detailcontroller@saveod');
Route::post('/rpp','detailcontroller@saverpp');
Route::post('/rpb','detailcontroller@saverpb');
Route::post('/rpj','detailcontroller@saverpj');
Route::post('/exp','detailcontroller@saveexp');


Route::get('deleteug/{id}','detailcontroller@deleteug');
Route::get('deletepg/{id}','detailcontroller@deletepg');
Route::get('deleteod/{id}','detailcontroller@deleteod');
Route::get('deleterpp/{id}','detailcontroller@deleterpp');
Route::get('deleterpb/{id}','detailcontroller@deleterpb');
Route::get('deleterpj/{id}','detailcontroller@deleterpj');
Route::get('deleteexp/{id}','detailcontroller@deleteexp');



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
Route::get('/verify','MainController@verify');
Route::post('/checkverify','MainController@checkverify');
Route::get('/profile','MainController@profile');
Route::get('/edit','MainController@editprofile');
Route::post('/edit','MainController@editstore');
Route::post('/checkmail','MainController@checkemail');
Route::get('/checkemail','MainController@verifymail');
Route::get('/changepassword','MainController@changepassword');
Route::post('/change','MainController@change');






Route::post('/list','ScoreController@list');
