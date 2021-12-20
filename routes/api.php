<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayalController;
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
Route::get('data',[PayalController::class,'getdata']);
Route::post('data/submit',[PayalController::class,'storedata']);
Route::post('data/update',[PayalController::class,'updatedata']);
Route::post('data/delete',[PayalController::class,'deletedata']);
