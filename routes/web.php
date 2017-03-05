<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
/*begin command ntt
Route::get('/', function () {

    return view('user.index');
});
end command ntt*/

Route::get('/', 'HomeController@index');

Route::get('/checkout', function () {
    return view('user.checkout');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::group(['namespace' => 'User'], function () {
    Route::get('products', 'ProductController@index');
    Route::get('product_detail/{id}', 'ProductController@detail');
    Route::get('cart', 'CartController@index');
    Route::post('add-cart', 'CartController@add');
    Route::get('cart', 'CartController@cart');
});

Route::get('/register', function () {
    return view('user.register');
});



Route::group(['prefix' => 'backend','namespace' => 'Backend'], function () {
    Route::get('/form-common', 'DashboardController@formCommon');
    Route::get('/form-validation', 'DashboardController@formValidation');
    Route::get('/error403', 'DashboardController@error403');
    Route::get('/grid', 'DashboardController@grid');


    Route::delete('product/destroys', 'ProductController@destroys');
    Route::resource('product', 'ProductController', ['except' => ['show', 'destroy']]);


    Route::delete('setting/destroys', 'SettingController@destroys');
    Route::resource('setting', 'SettingController', ['except' => ['show', 'destroy']]);

    Route::get('info', 'InfoController@index');

    Route::get('config', 'ConfigController@index');
    Route::put('config/update', 'ConfigController@update');

    Route::get('log', 'LogController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});