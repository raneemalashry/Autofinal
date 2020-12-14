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




Auth::routes();


Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider')
->where('driver', implode('|', config('auth.socialite.drivers')));
Route::get('/login/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback')
->where('driver', implode('|', config('auth.socialite.drivers')));


######################## website routes ########################
Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix'=>'shop'],function(){
    Route::get('/','ShopController@index')->name('shop');
    Route::get('/category{id}','ShopController@ShowItemsInCategory')->name('shop.category');
});
######################## Cart routes ########################

Route::resource('cart','Cartcontroller');

######################## cart routes ########################

######################## website routes ########################


