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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// list article
Route::get('article','Articlecontroller@index');
// list single article 
Route::get('article/{id}','Articlecontroller@show');

// create new article
Route::post('article','Articlecontroller@store');

// update article
Route::put('article','Articlecontroller@store');

// delete article
Route::delete('article/{id}','Articlecontroller@destroy');
