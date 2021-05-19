<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
});

Route::get('/users', [HomeController::class,'render_users']);
Route::get('/dropdown', [HomeController::class,'render_dropdown']);
Route::get('/subscriber', [HomeController::class,'render_subscriber']);
Route::get('/subscriber/export',[HomeController::class,'export_subscriber']);