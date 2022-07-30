<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FacultetController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('facultets', FacultetController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('authors', AuthorController::class);
Route::apiResource('groups', GroupController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('histories', HistoryController::class);
