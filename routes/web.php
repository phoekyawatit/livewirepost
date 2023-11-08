<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::resource('categories',\App\Http\Controllers\CategoryController::class);
});