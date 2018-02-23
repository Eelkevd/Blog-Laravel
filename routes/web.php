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

// Routes/Router: An overview of all the webpages and their controller page

// The home pages
Route::get('/articles', 'ArticlesController@home');
Route::get('/articles/home', 'ArticlesController@home');

// Create a category
Route::get('/articles/createcategory', 'CategoriesController@create');
Route::post('/articles/createcategory', 'CategoriesController@store');

// The overview page with all blogs
Route::get('/articles/blogs', 'ArticlesController@blogs');

Route::get('/articles/categories', 'ArticlesController@categories');

// Pages to create and store a new blog
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');

// Page of specific blog
Route::get('/articles/{article}', 'ArticlesController@show');

// Page to create and store a new comment
Route::post('/articles/{article}/comments', 'CommentsController@store');

// Page to blog selected from category
Route::get('/articles/categories/{category}','CategoriesController@home');




