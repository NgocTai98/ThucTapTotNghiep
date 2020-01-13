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

//frontend

Route::get('', 'frontend\HomeController@getHome');

    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'frontend\ProductController@getProduct');
        Route::get('detail', 'frontend\ProductController@getProductDetail');
    });
    Route::group(['prefix' => 'cart'], function () {
        Route::get('', 'frontend\CartController@getcart');
        Route::get('checkout', 'frontend\CartController@getCheckout');
    });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'frontend\BlogController@getBlog');
        Route::get('single', 'frontend\BlogController@getBlogSingle');
    });
Route::get('contact', 'frontend\ContactController@getContact');  
Route::get('login', 'frontend\LoginController@getLogin');  

//backend
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'backend\HomeController@getIndex');
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@getProduct');
        Route::get('add', 'backend\ProductController@getAddProduct');
        Route::get('edit', 'backend\ProductController@getEditProduct');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@getCategory');
        Route::get('edit', 'backend\CategoryController@getEditCategory');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@getOrder');
        Route::get('detail', 'backend\OrderController@getDetailOrder');
        Route::get('processed', 'backend\OrderController@getProcessedOrder');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@getUser');
        Route::get('add', 'backend\UserController@getAddUser');
        Route::post('add', 'backend\UserController@postAddUser');
        Route::get('edit/{idUser}', 'backend\UserController@getEditUser');
        Route::post('edit/{idUser}', 'backend\UserController@postEditUser');
        Route::get('del/{idUser}', 'backend\UserController@getDelUser');
    });
});