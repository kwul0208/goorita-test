<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'storeLogin']);

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/post', [DashboardController::class, 'postView']);
Route::post('/post', [DashboardController::class, 'postStore']);
Route::get('/post/{id}', [DashboardController::class, 'deletePost']);
