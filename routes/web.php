<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth:admin'
], function(){
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->withoutMiddleware('auth:admin')->name('admin_login');
    Route::post('/login', 'Auth\LoginController@loginAdmin')->withoutMiddleware('auth:admin')->name('admin_login');
});


/**
 * Compiled views cleared!
 * Application cache cleared!
 * Route cache cleared!
 * Configuration cache cleared!
 * Compiled services and packages files removed!
 * Caches cleared successfully!
 */
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    return '<h1>Cache facade value cleared</h1>';
});
