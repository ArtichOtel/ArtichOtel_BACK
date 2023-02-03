<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Hero\HeroController;
use App\Http\Controllers\API\Link\LinkController;
use App\Http\Controllers\API\Link\LinksController;
use App\Http\Controllers\API\User\LoginController;
use App\Http\Controllers\API\User\UsersController;
use App\Http\Controllers\API\Footer\FooterController;
use App\Http\Controllers\API\Footer\FootersController;


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
//   return $request->user();
// });

Route::apiResource('users', UsersController::class);
Route::post('/user/login', LoginController::class);
Route::apiResource('hero', HeroController::class);
Route::apiResource('link', LinkController::class);
Route::apiResource('footer', FooterController::class);
Route::get('/footers', FootersController::class);
Route::get('/links', LinksController::class);
