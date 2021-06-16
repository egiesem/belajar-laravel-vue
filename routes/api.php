<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PostController;

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


// Route::get('posts', 'PostController@index');
// Route::group(['prefix' => 'post'], function () {
//     Route::post('add', 'PostController@add');
//     Route::get('edit/{id}', 'PostController@edit');
//     Route::post('update/{id}', 'PostController@update');
//     Route::delete('delete/{id}', 'PostController@delete');
// });

Route::apiResource('posts', PostController::class);
Route::post('post/add', [PostController::class, 'add']);