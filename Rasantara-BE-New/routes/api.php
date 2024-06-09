<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\MakananController;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('makanan', MakananController::class);
Route::post('/register', [AuthController::class ,'register'])->middleware('guest');
Route::post('/login', [AuthController::class ,'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api');
Route::get('/getbookmarks/{user_id}', [BookmarkController::class, 'getBookmarks']);


Route::resource('bookmark', BookmarkController::class);
Route::get('/bookmark/{id}', [BookmarkController::class, 'show']);