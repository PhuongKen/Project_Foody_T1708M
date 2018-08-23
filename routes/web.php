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
Route::get('/foody/trang-chu','HomeController@getHome');
Route::get('/foody/danh-muc','CategoryClientController@getCategory');
Route::get('/foody/chi-tiet-mon-an','DetailController@getDetail');
Route::resource('/foody/gio-hang','CartController');
Route::resource('/foody/thanh-toan','CheckoutController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/order','OrderController');
Route::resource('/admin/comment','CommentController');
Route::resource('admin/album','AlbumCmtController');
Route::resource('admin/orderaddress','OrderAddessController');
Route::resource('admin/detailorder','DetailOrderController');

Route::get('gui-mail','HomeController@sendMail');

Route::resource('admin/orderdetail','OrderDetailController');
Route::get('dang-ki', [
    'as'=>'dangki',
    'uses'=>'HomeController@getRegister'
]);
Route::post('dang-ki', [
    'as'=>'dangki',
    'uses'=>'HomeController@postRegister'
]);
Route::get('dang-nhap', [
    'as'=>'dangnhap',
    'uses'=>'HomeController@getLogin'
]);
Route::post('dang-nhap', [
    'as'=>'dangnhap',
    'uses'=>'HomeController@postLogin'
]);
Route::get('dang-xuat', [
    'as'=>'dangxuat',
    'uses'=>'HomeController@getLogout'
]);
Route::get('send-to-mail/{id}/{token}', [
    'as'=>'send-to-mail',
    'uses'=>'HomeController@verifyEmail'
]);



