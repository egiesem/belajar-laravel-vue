<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
  
Route::resource('webposts', PostController::class);
Route::post('webposts/add', [PostController::class, 'add']);

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');