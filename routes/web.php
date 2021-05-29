<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/layout', function () {
    return view('layouts.app');
});

Route::get('/second', 'FirstController@second');

Route::get('post-article', 'ArticleController@index');

Route::get('/add', 'ArticleController@create');
Route::post('/store', 'ArticleController@store')->name('article.store');

Route::get('/failure', function () {
    return view('failure');
})->name('failure');
