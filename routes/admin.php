<?php

/**
 * Admin routes
 */

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/login', 'LoginController@showLoginForm')->withoutMiddleware('auth:admin')->name('show.login');
        Route::post('/login', 'LoginController@login')->withoutMiddleware('auth:admin')->name('login');


        /** Users */
        Route::group(['prefix' => 'users'], function () {
            Route::group(['middleware' => ['hasPermission:view_admin_users']], function () {
                Route::get('/', 'AdminUserController@index')->name('users.index');
            });

            Route::group(['middleware' => ['hasPermission:create_admin_users']], function () {
                Route::get('/create', 'AdminUserController@create')->name('users.create');
                Route::post('/', 'AdminUserController@store')->name('users.store');
            });

            Route::group(['middleware' => ['hasPermission:edit_admin_users']], function () {
                Route::get('/{user}/edit', 'AdminUserController@edit')->name('users.edit');
                Route::match(['patch', 'put'], '/{user}', 'AdminUserController@update')->name('users.update');
            });

            Route::group(['middleware' => ['hasPermission:delete_admin_users']], function () {
                Route::delete('/{user}', 'AdminUserController@destroy')->name('users.destroy');
            });

            Route::group(['middleware' => ['hasPermission:edit_admin_users']], function () {
                Route::post('{user}/changepassword', 'AdminUserController@changePassword')->name('users.changepassword');
            });
        });
        /** End Users */

        /** Roles */
        Route::group(['prefix' => 'roles'], function () {
            Route::group(['middleware' => ['hasPermission:view_roles']], function () {
                Route::get('/', 'RoleController@index')->name('roles.index');
            });

            Route::group(['middleware' => ['hasPermission:create_roles']], function () {
                Route::get('/create', 'RoleController@create')->name('roles.create');
                Route::post('/', 'RoleController@store')->name('roles.store');
            });

            Route::group(['middleware' => ['hasPermission:edit_roles']], function () {
                Route::get('/{role}/edit', 'RoleController@edit')->name('roles.edit');
                Route::match(['patch', 'put'], '/{role}', 'RoleController@update')->name('roles.update');
            });

            Route::group(['middleware' => ['hasPermission:delete_roles']], function () {
                Route::delete('/{role}', 'RoleController@destroy')->name('roles.destroy');
            });
        });
        /** End Roles */
    });
});
