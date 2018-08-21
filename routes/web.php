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
Route::resource('food','FoodController');
Route::resource('/admin/restaurant','RestaurantController');
Route::resource('/admin/district','DistrictController');
Route::resource('/admin/ward','WardController');
Route::resource('/admin/address','AddressController');
Route::resource('/admin/album_restaurant','AlbumRestaurantController');
Route::resource('/admin/user', 'UserController');
Route::get('/layout/master', 'HomeController@index');
Route::resource('/foody/danhmuc','DanhmucController');
Route::get('/home', 'HomeController@getHome');