<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout');
    });
});


//Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/{category}/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('product');
Route::get('/{category}/products/add', [App\Http\Controllers\ProductsController::class, 'create'])->name('product');
Route::post('/{category}/products/add', [App\Http\Controllers\ProductsController::class, 'store'])->name('product');
