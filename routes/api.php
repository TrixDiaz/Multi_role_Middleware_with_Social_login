<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserCrudController;


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

Route::get('apirequest', [UserCrudController::class, 'index']);
Route::post('apirequest', [UserCrudController::class, 'store']);
Route::get('apirequest/{id}', [UserCrudController::class, 'show']);
Route::get('apirequest/{id}/edit', [UserCrudController::class, 'edit']);
Route::put('apirequest/{id}/update', [UserCrudController::class, 'update']);
Route::delete('apirequest/{id}/delete', [UserCrudController::class, 'destroy']);