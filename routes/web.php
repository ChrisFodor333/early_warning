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
    return view('home');
});

Route::get('/model', 'App\\Http\\Controllers\HomeController@model_page')->name('model_page');
Route::post('/model', 'App\\Http\\Controllers\ModelControllerNew@calculate')->name('calculate');

Route::get('/complexmodel', 'App\\Http\\Controllers\HomeController@complex_model_page')->name('model_page');
Route::post('/complexmodel', 'App\\Http\\Controllers\ModelControllerComplex@calculate')->name('calculate');

Route::get('/services', 'App\\Http\\Controllers\HomeController@services_page')->name('services');

Route::get('/riskmanagement', 'App\\Http\\Controllers\HomeController@risk_page')->name('risk');
Route::get('/about', 'App\\Http\\Controllers\HomeController@about_page')->name('about');

Route::get('/portfolio', 'App\\Http\\Controllers\HomeController@portfolio_page')->name('portfolio');

Route::get('/news', 'App\\Http\\Controllers\HomeController@news_page')->name('news');

Route::get('/contact', 'App\\Http\\Controllers\HomeController@contact_page')->name('contact');

Route::get('/team', 'App\\Http\\Controllers\HomeController@team_page')->name('team');

Route::get('/overview', 'App\\Http\\Controllers\HomeController@overview_page')->name('overview');
