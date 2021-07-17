<?php

/**
 * Admin routes
 */

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
        //Route::get('/addresses/index', 'AddressController@index');
        Route::group(['prefix' => 'addresses'], function () {
            Route::get('/index', 'AddressController@index');

            /** Roles */
            Route::group(['prefix' => 'countries'], function () {
                Route::group(['middleware' => ['hasPermission:view_countries']], function () {
                    Route::get('/', 'CountryController@index')->name('countries.index');
                });

                Route::group(['middleware' => ['hasPermission:create_country']], function () {
                    Route::get('/create', 'CountryController@create')->name('countries.create');
                    Route::post('/', 'CountryController@store')->name('countries.store');
                });

                Route::group(['middleware' => ['hasPermission:edit_country']], function () {
                    Route::get('/{country}/edit', 'CountryController@edit')->name('countries.edit');
                    Route::match(['patch', 'put'], '/{country}', 'CountryController@update')->name('countries.update');
                });

                Route::group(['middleware' => ['hasPermission:delete_country']], function () {
                    Route::delete('/{country}', 'CountryController@destroy')->name('countries.destroy');
                });
            });
            /** End Roles */
        });
    });
});
