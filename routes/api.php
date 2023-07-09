<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUsersController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Api\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisteredUserController::class, 'store'])
            ->middleware(['guest:'.config('fortify.guard')]);


//-------- /v1/api/users ---------------
Route::get("/v1/users", [UsersController::class, 'getUsers']);
Route::get("/v1/users/{id}", [UsersController::class, 'getUsersById']);
Route::get("/v1/users/{name}/search", [UsersController::class, 'searchUserByName']);
Route::post("/v1/users/add", [UsersController::class, 'addUsers']);
Route::put("/v1/users/{id}/update", [UsersController::class, 'updateUsersById']);
Route::delete("/v1/users/{id}/delete", [UsersController::class, 'deleteUsersById']);

//      /api/users/{id}/delete
//      deletes user by his id from dtbase
//Route::post("/v1/users/{id}/delete", [UsersController::class, 'deleteUsers']);

