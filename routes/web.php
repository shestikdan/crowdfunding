<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'StartupController@index')->name('startup.index');
    Route::group(['prefix' => '/startup'], function () {
        Route::get('/create', 'StartupController@create')->name('startup.create');
        Route::post('/', 'StartupController@store')->name('startup.store');
        Route::get('/{id}', 'StartupController@show')->name('startup.show');
    });
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/', 'Auth\LoginController@show')->name('auth');
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('auth.provider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::group(['prefix' => 'api'], function (){
    Route::get('/startup', 'StartupController@getStartup');
});

Auth::routes();
