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
    Route::resource('/admin/comment', 'CommentController');
    Route::resource('admin/album', 'AlbumCmtController');
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/restaurant', 'RestaurantController');
    Route::resource('/admin/district', 'DistrictController');
    Route::resource('/admin/ward', 'WardController');
    Route::resource('/admin/address', 'AddressController');
    Route::resource('/admin/album_restaurant', 'AlbumRestaurantController');
    Route::resource('/admin/user', 'UserController');
    Route::get('/admin/status', 'BookTableController@status');
    //admin foody
    Route::get('admin', [
        'as' => 'admin',
        'uses' => 'AdminController@getHome'
    ]);
    Route::get('admin/chart', 'AdminController@chart');

//    Route::get('/chart-api', 'OrderController@getChartApi');
});
Route::group(['middleware' => 'adminrestaurantLogin'], function () {
    Route::resource('/restaurant/orderaddress', 'OrderAddessController');
    Route::resource('/restaurant/detailorder', 'DetailOrderController');
    Route::resource('/restaurant/food', 'FoodController');
    Route::resource('/restaurant/order', 'OrderController');
    Route::resource('/restaurant/booktable', 'BookTableController');
    Route::get('/restaurant/change-status', 'OrderController@changeStatus');
    //Admin restaurant
    Route::get('admin-restaurant', [
        'as' => 'admin-restaurant',
        'uses' => 'AdminRestaurantController@getHome'
    ]);
//Chart doanh thu nhà hàng theo ngày admin restaurant
    Route::get('admin/chart-restaurant', 'AdminRestaurantController@chart');
//Chart doanh thu nhà hàng theo tháng admin restaurant
    Route::get('admin/chart-restaurantmonth', 'AdminRestaurantController@chartmonth');
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
//Dang nhap admin foody
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
//Dang nhap admin restaurant
Route::get('dang-nhap-admin-restaurant', [
    'as' => 'dangnhapadminrestaurant',
    'uses' => 'AdminRestaurantController@getLogin'
]);
Route::post('dang-nhap-admin-restaurant', [
    'as' => 'dangnhapadminrestaurant',
    'uses' => 'AdminRestaurantController@postLogin'
]);
Route::get('dang-xuat-admin-restaurant', [
    'as' => 'dangxuatadminrestaurant',
    'uses' => 'AdminRestaurantController@getLogout',
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
Route::get('/foody/district/{idDistrict}', 'Client\CartController@showDistrict');
Route::get('/foody/ward/{idWard}', 'Client\CartController@showWard');
Route::post('/foody/gui-don-hang', 'Client\CartController@checkoutCart');
Route::get('edit-user/{id}', [
    'as' => 'edituser',
    'uses' => 'Client\UpdateUserController@getEdit'
]);
Route::post('edit-user/{id}', [
    'as' => 'edituser',
    'uses' => 'Client\UpdateUserController@postEdit'
]);
Route::get('/foody/ve-chung-toi', 'Client\AboutusController@index');
Route::get('/foody/lich-su-don-hang', 'Client\OrderHistoryController@index');
Route::get('/foody/tim-kiem', [
    'as' => 'search',
    'uses' => 'Client\SearchController@search'
]);
Route::get('/client/district/{idDistrict}', 'Client\SearchController@showDistrict');
Route::get('/foody/dia-diem/', [
    'as' => 'diadiem',
    'uses' => 'Client\SearchController@searchArea'
]);
Route::get('/foody/danh-muc-dia-diem/', [
    'as' => 'category',
    'uses' => 'Client\SearchController@categoryArea'
]);
Route::post('/foody/danh-gia', 'Client\RestaurantController@rating');
Route::match(['get', 'post'], '/foody/gan-toi', [
    'as' => 'nearBy',
    'uses' => 'Client\LocationController@nearBy'
]);


Route::match(['get', 'post'], '/foody/map', [
    'as' => 'map',
    'uses' => 'Client\MapController@map'
]);

Route::get('/foody/gan-toi/danh-muc/', [
    'as' => 'gantoi',
    'uses' => 'Client\LocationController@selectCategory'

]);

Route::get('/foody/dat-cho', 'Client\BookTableController@datCho');
Route::post('/foody/dat-cho', 'Client\BookTableController@store');
Route::get('/foody/gan-toi/danh-muc/', [
    'as' => 'gantoi',
    'uses' => 'Client\LocationController@selectCategory'
]);

