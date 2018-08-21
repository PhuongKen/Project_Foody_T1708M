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
<<<<<<< HEAD
Route::resource('/admin/food','FoodController');
=======
Route::resource('/food','FoodController');
Route::resource('/admin/category','CategoryController');
>>>>>>> e1c812731db11a0ca7e82d856d047a4fb7b3e237
Route::resource('/admin/restaurant','RestaurantController');
Route::resource('/admin/district','DistrictController');
Route::resource('/admin/ward','WardController');
Route::resource('/admin/address','AddressController');
Route::resource('/admin/album_restaurant','AlbumRestaurantController');
Route::resource('/admin/user', 'UserController');
Route::resource('/foody/danhmuc','DanhmucController');
Route::resource('/foody/trangchitiet','DetailController');
Route::resource('/admin/category','CategoryController');
