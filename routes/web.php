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
    return view('leadForm'); /* Landing page. */
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); /* Lead listing page. */
Route::get('/lead', 'LeadController@index')->name('leadForm'); /* Lead creation page. */
Route::post('/lead/create', 'LeadController@create')->name('create'); /* Lead creation posting function. */
Route::get('/home/view/{id}', 'HomeController@detailView'); /*Each lead detail page view function.*/
