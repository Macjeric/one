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



Route::get('/', 'PagesController@index');
Route::get('/purchases', 'PagesController@purchases');
Route::get('/stockmng', 'PagesController@stockmng');   
Route::resource('posts', 'PostsController');
Route::resource('/receive', 'ReceivesController');
Route::resource('print', 'PrintpageController');
Route::resource('free', 'FreesController');
Route::resource('orders', 'OrdersController');
Route::resource('ordernotify', 'OrdernotifyController');
Route::get('/ordersmade', 'OrdersMadeController@index')->name('ordersmade');
Route::resource('Admin', 'AdminsController');
Route::resource('Supplier', 'SupplierController');
Route::resource('requisition', 'RequisitionsController');
Route::get('/report/{id}', 'RequisReportController@index');







// Route::get('/printview', 'PrintController@printview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
