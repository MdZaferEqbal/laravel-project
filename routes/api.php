<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:api')->group(function () {
    // Route to store User's data in database.
    Route::post('user/store', 'App\Http\Controllers\Api\UserController@store');
    // Route to display all User's data from database.
    Route::get('get/users/{flag?}', [UserController::class, 'index']);
    // Route to display selected User's data from database.
    Route::get('get/user/{id}', [UserController::class, 'show']);
    // Route to delete selected User's data from database.
    Route::delete('delete/user/{id}', [UserController::class, 'destroy']);
    // Route to update all columns of table in database for selected User.
    Route::put('update/user/{id}', [UserController::class, 'update']);
    // Route to update one column of table in database in this case the password for selected User.
    Route::patch('update/user-password/{id}', [UserController::class, 'updatePassword']);
});

// Route to register new users
Route::post('user/register', [UserController::class, 'register']);
// Route to login users
Route::post('user/login', [UserController::class, 'login']);
