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
use App\Http\Controllers\API\User\LoginController;
use App\Http\Controllers\API\User\UsersController;
use App\Http\Controllers\API\Footer\FooterController;
use App\Http\Controllers\API\Footer\FootersController;
use App\Http\Controllers\API\Section\SectionController;
use App\Http\Controllers\API\Review\ReviewController;
use App\Http\Controllers\API\Review\ReviewsController;

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

Route::apiResource('users', UsersController::class);
Route::post('/user/login', LoginController::class);
Route::get('/sections', SectionController::class);
Route::apiResource('hero', HeroController::class);
Route::get('/offers', OffersController::class);
Route::apiResource('offer', OfferController::class);
Route::get('/advantages', AdvantagesController::class);
Route::apiResource('advantage', AdvantageController::class);
Route::get('/news', NewsInfoController::class);
Route::apiResource('new', NewInfoController::class);
Route::apiResource('video', VideoController::class);
Route::get('/reviews', ReviewsController::class);
Route::apiResource('review', ReviewController::class);
Route::get('/footers', FootersController::class);
Route::apiResource('footer', FooterController::class);
Route::get('/room-types', RoomsTypesController::class);
Route::get('/links', LinksController::class);
Route::apiResource('link', LinkController::class);
