<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;

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

//Route::get('/signup', function () {
//   return 'notun accnt';
//});

//Route::get('/user', [UserController::class, 'index']);
//Route::get('/user', 'App\Http\Controllers\UserController@index');

//Route::get('/user/{id}', 'App\Http\Controllers\UserController@show');
//Route::get('/user/profile', 'App\Http\Controllers\UserController@index')->name('profile');

Route::controller(UserController::class)->group(function () {
    //Route::get('/user/profile', 'index')->middleware(EnsureTokenIsValid::class);
    Route::get('/user/profile', 'index');
    Route::get('/user/{id}', 'show');
    Route::post('/user/profile', 'post');
    Route::get('/signup', 'signup');
    Route::post('/users', 'store');
    Route::get('/reg', 'reg');
    Route::get('/login', 'login');
    Route::get('/demo', 'demo');
    Route::get('/test', 'test');

});

//Route::resource('posts', PostsController::class);

Route::resources([
    'pages' => PagesController::class,
    'posts' => PostController::class,
]);