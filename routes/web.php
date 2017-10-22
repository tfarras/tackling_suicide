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
    return view('welcome');
});

Auth::routes();

Route::get('/home',function (){
    return redirect('./forums');
});

Route::get('/stay',function(){
    return view('stay');
});

Route::get('/quiz',function(){
    return view('quize');
});

Route::get('/choose',function (){
    return view('choose');
});

Route::get('/personalization','PersonalizationController@index');
Route::post('/changeBG','PersonalizationController@updateBG');
Route::post('/changeAvatar','PersonalizationController@updateAvatar');
Route::post('/resetBG','PersonalizationController@resetBG');