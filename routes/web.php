<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', 'PageController@home')->name('home');

/*Рецепты*/
Route::get('/recipes', 'RecipeController@index')->name('recipes');
Route::get('/recipe/{id}', 'RecipeController@show')->name('recipe');
Route::get('/recipe/{id}/edit', 'RecipeController@edit')->name('recipe_edit');
Route::post('/recipe/{id}/update', 'RecipeController@update')->name('recipe_update');

/*Авторизация/Регистрация*/
Route::post('/registration', 'AuthController@registration')->name('registration');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

/*Администратор*/
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'Admin\PageController@index')->name('admin');
    Route::get('/users', 'Admin\UserController@index')->name('admin.users');
    Route::get('/recipes', 'Admin\RecipeController@index')->name('admin.recipes');
});
