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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/posts', 'PostController@index');
    Route::get('/friendrequests', 'FriendrequestsController@index');
    Route::post('/friendrequests/{user}', 'FriendrequestsController@create');
    Route::delete('/friendrequests/{user}', 'FriendrequestsController@destroy');
    Route::post('/posts', 'PostController@store');
    Route::get('/profiles/{user}', 'ProfileController@show');
    Route::get('/addfriends', 'AddFriendsControler@index');
    Route::post('/addfriend/{user}', 'AddFriendsControler@store');
    Route::get('/addfriend/pendings', 'AddFriendsControler@create');
    Route::put('/addfriend/{user}', 'AddFriendsControler@update');
    Route::put('/friends/{user}', 'FriendsController@store');
    Route::delete('/friends/{user}', 'FriendsController@destroy');
    Route::delete('/addfriend/{user}', 'AddFriendsControler@delete');
});
Auth::routes();
