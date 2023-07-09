<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('index/index');
});
Route::get('/home', function () {
    return view('index/index');
});

Route::get('/users', [UsersController::class, "index"]);
Route::get('/delete/{id}', [UsersController::class, "delete"]);
Route::get('/details/{id}', [UsersController::class, "details"]);
Route::put("/update", [UsersController::class, "update"]);
