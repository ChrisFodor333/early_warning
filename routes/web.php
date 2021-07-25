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

// ADMIN STUFF
Route::get('/pro-admin/login', array('uses' => 'App\\Http\\Controllers\AdminController@showlogin'));
Route::post('/pro-admin/', array('uses' => 'App\\Http\\Controllers\AdminController@dologin'));
Route::get('/pro-admin/', array('uses' => 'App\\Http\\Controllers\AdminController@dashboard'));
Route::get('/pro-admin/logout', array('uses' => 'App\\Http\\Controllers\AdminController@logout'));

Route::get('/pro-admin/profile', array('uses' => 'App\\Http\\Controllers\AdminController@showprofile'));
Route::post('/pro-admin/profile/edit/',[  'as' => 'updates',
    'uses' =>'App\\Http\\Controllers\AdminController@changepass']);

Route::get('/pro-admin/addadmin/','App\\Http\\Controllers\AdminController@showaddAdmin');
Route::post('/pro-admin/addadmin/',[  'as' => 'updates',
        'uses' =>'App\\Http\\Controllers\AdminController@add_admin']);


Route::get('/pro-admin/users', 'App\\Http\\Controllers\AdminController@user_index');
Route::get('/pro-admin/users/data', 'App\\Http\\Controllers\AdminController@usertable');

Route::get('/pro-admin/delete/{id}', [
    'as' => 'delete', 'uses' => 'App\\Http\\Controllers\AdminController@delete'
]);

Route::get('/pro-admin/edit/{id}','App\\Http\\Controllers\AdminController@edit');
Route::post('/pro-admin/edited/',[  'as' => 'updates',
        'uses' =>'App\\Http\\Controllers\AdminController@edit_validator']);


// END OF ADMIN STUFF

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
