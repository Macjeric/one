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
Route::get('/ordersmade/{id}', 'OrdersMadeController@index');
Route::resource('Admin', 'AdminsController');
Route::resource('Supplier', 'SupplierController');
Route::resource('requisition', 'RequisitionsController');
Route::get('/report/{id}', 'RequisReportController@index');
Route::get('madeorders', 'OrdersMadeController@md');
Route::get('/make-buy', 'MakeBuysController@calc');
Route::resource('/store', 'MainStoreController');
// Route::get('/prnt', 'PrintpageController@receive');
Route::get('/prnt', 'MonthsController@receive');
Route::get('ordernotfy', 'OrdermonthController@ordernotify');


Route::get('/requisrep', 'PrintpageController@display');
Route::get('/others', 'PrintpageController@others');
















// Route::get('/printview', 'PrintController@printview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
