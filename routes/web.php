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

Route::get('/articles', 'ArticlesController@home');

/*Route::get('/articles', function () {

	//$articles = DB::table('articles')->get();

	$articles = Article::all();

    return view('articles.home', compact('articles'));
});*/

//Route::get('/articles/{article}', 'ArticlesController@show');

/*Route::get('/articles/{article}', function ($id) {

	//$article = DB::table('articles')->find($id);

	$article = Article::find($id);

    return view('articles.show', compact('article'));
});*/

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/home', 'ArticlesController@home');

Route::get('/articles/blogs', 'ArticlesController@blogs');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::post('/articles/{article}/comments', 'CommentsController@store');
