<?php

/**
 * Admin routes
 */
Route::group([
    'middleware' => 'auth:admin',
], function () {
    Route::name('admin.')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/login', 'LoginController@showLoginForm')->withoutMiddleware('auth:admin')->name('show.login');
        Route::post('/login', 'LoginController@login')->withoutMiddleware('auth:admin')->name('login');
        Route::resource('/users', 'AdminUserController')->name('', 'users');
        Route::resource('/roles', 'AdminUserController')->name('', 'roles');
    });
});
