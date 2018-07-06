<?php

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


    


Route::get('/', 'UsersController@index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController');

 Route::group(['prefix' => 'users/{id}'], function () {
                Route::post('follow', 'FollowController@store')->name('user.follow');
                Route::delete('unfollow', 'FollowController@destroy')->name('user.unfollow');
                Route::get('followings', 'UsersController@followings')->name('users.followings');
                Route::get('followers', 'UsersController@followers')->name('users.followers');
                });

    Route::resource('groups', 'GroupsController');
    
    Route::group(['prefix' => 'participation/{id}'], function () {
        Route::post('join', 'UserJoinController@store')->name('group.join');
        Route::delete('exit', 'UserJoinController@destroy')->name('group.exit');
        Route::get('participants', 'UsersController@participants')->name('groups.participants');
    });

   Route::resource('chats', 'ChatsController', ['only' => ['store', 'destroy']]);

});