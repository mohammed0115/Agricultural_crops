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
        Route::post('/logout', 'LogoutController@perform')->name('logout');
    });
});


//Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/{category}/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('index');
Route::get('/{category}/products/add', [App\Http\Controllers\ProductsController::class, 'create'])->name('product');

Route::get('/{category}/products-step-1',       [App\Http\Controllers\ProductsController::class, 'createStep1'])->name('products-create');
Route::post('/products-post-step-1', [App\Http\Controllers\ProductsController::class,'PostcreateStep1'])->name('products.post.step.1');
Route::get('/products-create-step-2', [App\Http\Controllers\ProductsController::class,'createStep2'])->name('products.create.step.2');
Route::post('/register-post-step-2', [App\Http\Controllers\ProductsController::class,'PostcreateStep2'])->name('products.post.step.2');
Route::get('/products-create-step-3', [App\Http\Controllers\ProductsController::class,'createStep3'])->name('products.create.step.3');
Route::post('/products-post-step-3', [App\Http\Controllers\ProductsController::class,'PostcreateStep3'])->name('products.post.step.3');

Route::post('/{category}/products/add', [App\Http\Controllers\ProductsController::class, 'store'])->name('product');
