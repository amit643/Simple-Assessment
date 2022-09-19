<?php

use Illuminate\Support\Facades\Route;



Route::get('/','ProductController@shopList')->name('shopList');
Route::get('/admin','LoginController@index')->name('admin-login');
Route::post('/admin/loginCheck','LoginController@process')->name('admin-login-check');


Route::middleware('loginAuth')->group(function () {
    
    Route::group(['prefix' => 'admin/product'], function () {
        Route::get('', 'ProductController@index')->name('product.list');
        Route::get('get', 'ProductController@getProduct')->name('product.get');
        Route::get('add', 'ProductController@create')->name('product.add');
        Route::post('create', 'ProductController@store')->name('product.create');
        Route::get('edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::get('view/{id}', 'ProductController@view')->name('product.view');
        Route::post('update', 'ProductController@update')->name('product.update');
        Route::get('delete/{id}', 'ProductController@destroy')->name('product.delete');
    });
    
    Route::get('/logout','LoginController@logout')->name('logout');
});