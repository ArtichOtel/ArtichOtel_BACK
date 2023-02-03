<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AdvantageController;
use App\Http\Controllers\API\AdvantagesController;
use App\Http\Controllers\API\NewInfoController;
use App\Http\Controllers\API\NewsInfoController;
use App\Http\Controllers\API\OfferController;
use App\Http\Controllers\API\OffersController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('advantage', AdvantageController::class);
Route::get('/advantages', AdvantagesController::class);
Route::apiResource('new', NewInfoController::class);
Route::get('/news', NewsInfoController::class);
Route::apiResource('offer', OfferController::class);
Route::get('/offers', OffersController::class);