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
Auth::routes();

Route::group(["middleware"=>['auth']],function(){


Route::get('/home', 'HomeController@index')->name('home');


Route::get('register-user', 'dashboardController@register_form');
Route::post('register-store', 'dashboardController@register_store');


Route::get('/', 'dashboardController@index');
//prisonar information
Route::get('prisoner-add', 'prisonerController@add');
Route::post('prisoner-store', 'prisonerController@store');
Route::get('presoner-all', 'prisonerController@all');
Route::get('view-prisoner/{id}', 'prisonerController@view');
Route::get('relese/{id}', 'prisonerController@relese');
Route::get('edit-prisonar/{id}', 'prisonerController@edit');
Route::post('prisoner-update/{id}', 'prisonerController@update');
Route::get('delete-prisoner/{id}', 'prisonerController@delete');

//gurd info
Route::get('gurd-add', 'gurdController@add');
Route::post('gurd-store', 'gurdController@gurd_store');
Route::get('gurd-all', 'gurdController@gurd_all');
Route::get('edit/{id}', 'gurdController@edit');
Route::post('update/{id}', 'gurdController@update');
Route::get('delete/{id}', 'gurdController@delete');

//Visitor
Route::get('visitor-add', 'visitorController@visitor_add');
Route::post('store-visitor', 'visitorController@store_visitor');
Route::get('all-visitor', 'visitorController@visitor_all');
Route::get('edit-visitor/{id}', 'visitorController@edit_visitor');
Route::post('update-visitor/{id}', 'visitorController@update_visitor');
Route::get('view-visitor/{id}', 'visitorController@view_visitor');

Route::get('visitor-delete/{id}', 'visitorController@delete_visitor');


Route::get('contact', 'contactController@contact');
Route::post('store-contatc', 'contactController@store_contact');


Route::get('logout', 'dashboardController@logout');

});
