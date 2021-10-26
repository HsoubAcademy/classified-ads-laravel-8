<?php

use App\Helpers\helper;

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

Route::get('/', "AdsController@index");

Auth::routes();


Route::get('home', 'HomeController@index')->name('home');

Route::get('ad/{id}/{slug}','AdsController@show');

Route::resource('ads', 'AdsController')->only([
    'create','store','edit','update', 'destroy'
]);

Route::get('myAds', 'AdsController@getUserAds')->middleware('auth');

Route::get('myFav', 'AdsController@getUserFavorites')->middleware('auth');

Route::get('category/{id}/{slug}', 'AdsController@getAdsByCategory');

Route::post('ads/{id}/favorite','FavoriteController@store');

Route::post('ads/{id}/unfavorite','FavoriteController@destroy');


Route::resource('comments', 'CommentController')->only([
    'show','store', 'destroy'
]);
Route::post('comment/reply', 'CommentController@reply');


Route::post('search','AdsController@search');

Route::post('sendMail','SendMailController@sendMail');






