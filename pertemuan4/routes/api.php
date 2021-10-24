<?php

use App\Http\Controllers\AnimalControllers;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# method get
Route::get('/animals', [AnimalControllers::class, 'index']);

# method post
Route::post('/animals', [AnimalControllers::class, 'store']);

# method put
Route::put('/animals/{id}', [AnimalControllers::class, 'update']);

# method delete
Route::delete('/animals/{id}', [AnimalControllers::class, 'destroy']);
