<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\RouteGroup;
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
    return view('landing.home');
});


/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'storeLogin']);

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group([
    'middleware' => 'auth'
], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/post', [DashboardController::class, 'postView']);
    Route::post('/post', [DashboardController::class, 'postStore']);
    Route::get('/post/delete/{id}', [DashboardController::class, 'delete']);
    Route::get('/post/edit/{id}', [DashboardController::class, 'editView']);
    Route::put('/post/edit/{id}', [DashboardController::class, 'editPost']);
    Route::get('/post/detail/{id}', [DashboardController::class, 'detail']);
});

