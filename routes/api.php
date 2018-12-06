<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Controladores dentro do namespace 'App \ Http \ Controllers \ API'
    Route::namespace('API')->name('api.')->group(function () {
         Route::prefix('products')->group(function () {
            route::get('/','ProductController@index')->name('index_products');
                route::get('/{id}','ProductController@show')->name('show_products');
                    Route::post('/','ProductController@store')->name('store_products');
                        Route::put('/{id}','ProductController@update')->name('update_products');
                            Route::delete('/{id}','ProductController@delete')->name('delete_products');
   
        });
});