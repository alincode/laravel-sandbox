<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->get('/articles', 'ArticleController@index');
Route::middleware('api')->post('/articles', 'ArticleController@store');
Route::middleware('api')->get('/articles/{id}', 'ArticleController@show');
Route::middleware('api')->put('/articles/{id}', 'ArticleController@update');
Route::middleware('api')->delete('/articles/{id}', 'ArticleController@destroy');

Route::middleware('api')->get('/users', 'UserController@index');
Route::middleware('api')->get('/users/withTrashed', 'UserController@withTrashed');
Route::middleware('api')->get('/users/onlyTrashed', 'UserController@onlyTrashed');
Route::middleware('api')->post('/users', 'UserController@store');
Route::middleware('api')->get('/users/{id}', 'UserController@show');
Route::middleware('api')->put('/users/{id}', 'UserController@update');
Route::middleware('api')->delete('/users/{id}', 'UserController@destroy');
