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
    // Profiles Controller
    Route::get('/profiles/{user}', 'ProfileController@show');
    Route::put('/profiles/{user}', 'ProfileController@update');
    Route::get('/profiles/{user}/edit', 'ProfileController@edit');

    Route::get('/home', 'HomeController@index')->name('home');

    //Post Controler
    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{post}', 'PostController@show');

    //friends Request Controller
    Route::get('/friendrequests', 'FriendrequestsController@index');
    Route::post('/friendrequests/{user}', 'FriendrequestsController@create');
    Route::delete('/friendrequests/{user}', 'FriendrequestsController@destroy');

    //AddFriends Controller
    Route::get('/addfriends', 'AddFriendsControler@index');
    Route::post('/addfriend/{user}', 'AddFriendsControler@store');
    Route::get('/addfriend/pendings', 'AddFriendsControler@create');
    Route::put('/addfriend/{user}', 'AddFriendsControler@update');

    //Friends Controller
    Route::put('/friends/{user}', 'FriendsController@store');
    Route::delete('/friends/{user}', 'FriendsController@destroy');
    Route::delete('/addfriend/{user}', 'AddFriendsControler@delete');

    // Likes Controller

    Route::post('/likes/{post}', 'LikesController@store');

    // Comments Controller

    Route::post('/comments/{post}', 'CommentsController@store');

    // Notification Controller

    Route::get('/notificatios', 'NotificationController@index');
    Route::get('/notificatios/{note}/post', 'NotificationController@show');
});
Auth::routes();
