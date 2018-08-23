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
Route::resource('/admin/food','FoodController');
Route::resource('/food','FoodController');
Route::get('/error', function (){
   return view('error.404');
});
Route::resource('/admin/food','FoodController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/restaurant','RestaurantController');
Route::resource('/admin/district','DistrictController');
Route::resource('/admin/ward','WardController');
Route::resource('/admin/address','AddressController');
Route::resource('/admin/album_restaurant','AlbumRestaurantController');
Route::resource('/admin/user', 'UserController');
Route::get('/foody/trang_chu','HomeController@getHome');
Route::get('/foody/danh_muc','CategoryClientController@getCategory');
Route::get('/foody/chi_tiet_mon_an','DetailController@getDetail');
Route::resource('/foody/gio_hang','CartController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/order','OrderController');
Route::resource('/admin/comment','CommentController');
Route::resource('admin/album','AlbumController');
Route::resource('admin/orderaddress','OrderAddessController');


