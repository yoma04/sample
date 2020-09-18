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
})->name('home');
/*home*/
Route::get('/home', function () {
    return view('home/top');
})->name('home');
/*service*/
Route::get('/service',function(){
    return view('services/index');
})->name('services');

Route::get('/service/houseclean',function(){
    return view('services/houseclean');
})->name('houseclean');

/*order*/
Route::get('/order',function(){
    return view('order/index');
})->name('order');
/*contact*/
Route::get('/index', 'ContactsController@index')->name('contact');
Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
Route::post('/process', 'ContactsController@process')->name('process');
Route::get('/complete', 'ContactsController@complete')->name('complete');
/*overview*/
Route::get('/overview',function(){
    return view('overview/index');
})->name('overview');