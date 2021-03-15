<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', 'PageController@home')->name('home');

/*Рецепты*/
Route::get('/recipes', 'RecipeController@index')->name('recipes');

Route::get('/recipe/{id}', 'RecipeController@show')->name('recipe');

/*Авторизация/Регистрация*/
Route::post('/registration', 'AuthController@registration')->name('registration');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

/*Пользователи*/

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'Admin/PageController@index')->name('admin');
    Route::get('/users', 'Admin/UserController@index')->name('admin');
});

//Route::get('/users', 'UserController@index')->name('users');
//Route::get('/users/{id}/delete', 'UserController@delete')->name('user_delete');
