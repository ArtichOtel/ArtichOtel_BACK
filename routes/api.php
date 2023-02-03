<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AdvantageController;
use App\Http\Controllers\API\AdvantagesController;
use App\Http\Controllers\API\NewInfoController;
use App\Http\Controllers\API\NewsInfoController;
use App\Http\Controllers\API\OfferController;
use App\Http\Controllers\API\OffersController;
use App\Http\Controllers\API\RoomsTypesController;
use App\Http\Controllers\API\VideoController;
use App\Http\Controllers\API\Hero\HeroController;
use App\Http\Controllers\API\Link\LinkController;
use App\Http\Controllers\API\Link\LinksController;
use App\Http\Controllers\API\User\Login;
use App\Http\Controllers\API\User\Users;
use App\Http\Controllers\API\Footer\FooterController;
use App\Http\Controllers\API\Footer\FootersController;
use App\Http\Controllers\API\Section\SectionController;

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
Route::get('/sections', SectionController::class);
Route::apiResource('users', Users::class);
Route::post('/user/login', Login::class);
// Sections needed
Route::apiResource('hero', HeroController::class);
Route::get('/offers', OffersController::class);
Route::apiResource('offer', OfferController::class);
Route::get('/advantages', AdvantagesController::class);
Route::apiResource('advantage', AdvantageController::class);
Route::get('/news', NewsInfoController::class);
Route::apiResource('new', NewInfoController::class);
Route::apiResource('video', VideoController::class);
// Reviews needed
Route::get('/footers', FootersController::class);
Route::apiResource('footer', FooterController::class);
Route::get('/room-types', RoomsTypesController::class);
Route::get('/links', LinksController::class);
Route::apiResource('link', LinkController::class);
