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
Route::resource('/admin/food', 'FoodController');
Route::resource('/food', 'FoodController');
Route::get('/errors', function () {
    return view('error.404');
});
Route::get('gui-mail', 'HomeController@sendMail');
Route::get('/foody/trang-chu', 'HomeController@getHome');
Route::get('/foody/danh-sach-nha-hang', 'Client\FoodController@index');
Route::get('/foody/chi-tiet-nha-hang', 'Client\RestaurantController@index');
Route::get('/foody/chi-tiet-mon-an', 'Client\FoodDetailController@getIndex');
Route::group(['middleware' => 'adminLogin'], function () {
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/order', 'OrderController');
    Route::get('/admin/change-status', 'OrderController@changeStatus');
    Route::resource('/admin/comment', 'CommentController');
    Route::resource('admin/album', 'AlbumCmtController');
    Route::resource('admin/orderaddress', 'OrderAddessController');
    Route::resource('admin/detailorder', 'DetailOrderController');
    Route::resource('/admin/food', 'FoodController');
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/restaurant', 'RestaurantController');
    Route::resource('/admin/district', 'DistrictController');
    Route::resource('/admin/ward', 'WardController');
    Route::resource('/admin/address', 'AddressController');
    Route::resource('/admin/album_restaurant', 'AlbumRestaurantController');
    Route::resource('/admin/user', 'UserController');
    Route::resource('admin/orderdetail', 'OrderDetailController');
});
Route::get('gui-mail', 'HomeController@sendMail');
Route::get('dang-ki', [
    'as' => 'dangki',
    'uses' => 'HomeController@getRegister'
]);
Route::post('dang-ki', [
    'as' => 'dangki',
    'uses' => 'HomeController@postRegister'
]);
Route::get('dang-nhap', [
    'as' => 'dangnhap',
    'uses' => 'HomeController@getLogin'
]);
Route::post('dang-nhap', [
    'as' => 'dangnhap',
    'uses' => 'HomeController@postLogin'
]);
Route::get('dang-xuat', [
    'as' => 'dangxuat',
    'uses' => 'HomeController@getLogout'
]);
Route::get('send-to-mail/{id}/{token}', [
    'as' => 'send-to-mail',
    'uses' => 'HomeController@verifyEmail'
]);
Route::get('dang-nhap-admin', [
    'as' => 'dangnhapadmin',
    'uses' => 'AdminController@getLogin'
]);
Route::post('dang-nhap-admin', [
    'as' => 'dangnhapadmin',
    'uses' => 'AdminController@postLogin'
]);
Route::get('dang-xuat-admin', [
    'as' => 'dangxuatadmin',
    'uses' => 'AdminController@getLogout',
]);
Route::get('admin', [
    'as' => 'admin',
    'uses' => 'AdminController@getHome'
]);
Route::get('/foody/them-vao-gio-hang/{id}', [
    'as' => 'themvaogiohang',
    'uses' => 'Client\CartController@getAddtoCart'
]);
Route::post('/them-vao-gio-hang-api', 'Client\CartController@addToCartApi');
Route::get('/foody/them-gio-hang', 'Client\CartController@addToCart');
Route::get('/foody/xem-gio-hang', 'Client\CartController@showCart');
Route::get('/foody/lien-he', 'Client\ContactController@index');
Route::post('/foody/lien-he', 'Client\ContactController@store');
Route::get('/foody/xoa-san-pham', 'Client\CartController@destroyCart');
Route::get('/foody/nhap-thong-tin-don-hang', 'Client\CartController@checkout');
Route::put('/foody/nhap-thong-tin-don-hang', 'Client\CartController@showCheckout');
Route::post('/foody/gui-don-hang', 'Client\CartController@checkoutCart');
Route::get('edit-user/{id}', [
    'as' => 'edituser',
    'uses' => 'Client\UpdateUserController@getEdit'
]);
Route::post('edit-user/{id}', [
    'as' => 'edituser',
    'uses' => 'Client\UpdateUserController@postEdit'
]);
Route::get('/foody/ve-chung-toi','Client\AboutusController@index');
Route::get('/foody/lich-su-don-hang','Client\OrderHistoryController@index');