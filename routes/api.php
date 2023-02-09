<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Advantage\AdvantageController;
use App\Http\Controllers\API\Advantage\AdvantagesController;
use App\Http\Controllers\API\NewInfo\NewInfoController;
use App\Http\Controllers\API\NewInfo\NewInfosController;
use App\Http\Controllers\API\Offer\OfferController;
use App\Http\Controllers\API\Offer\OffersController;
use App\Http\Controllers\API\RoomsType\RoomsTypesController;
use App\Http\Controllers\API\Video\VideoController;
use App\Http\Controllers\API\Hero\HeroController;
use App\Http\Controllers\API\Link\LinkController;
use App\Http\Controllers\API\Link\LinksController;
use App\Http\Controllers\API\User\LoginController;
use App\Http\Controllers\API\User\LogoutController;
use App\Http\Controllers\API\User\UserController;
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

// GUESTS routes
Route::get('/sections', SectionController::class);
Route::get('/hero', SectionController::class);
Route::get('/offers', OffersController::class);
Route::get('/advantages', AdvantagesController::class);
Route::get('/news', NewInfosController::class);
Route::get('/reviews', ReviewsController::class);
Route::get('/room-types', RoomsTypesController::class);
Route::get('/footers', FootersController::class);
Route::get('/links', LinksController::class);

Route::post('/user/login', LoginController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user/logout', LogoutController::class);
});




// GOD admin routes
Route::middleware(['auth:sanctum', 'ability:doAnything'])->group(function () {
    Route::apiResource('user', UserController::class);
    Route::apiResource('hero', HeroController::class);
    Route::apiResource('offer', OfferController::class);
    Route::apiResource('advantage', AdvantageController::class);
    Route::apiResource('new', NewInfoController::class);
    Route::apiResource('video', VideoController::class);
    //Route::apiResource('review', ReviewController::class);        // SPRINT 2
    Route::apiResource('footer', FooterController::class);
    Route::apiResource('link', LinkController::class);
});


// CUSTOMERS routes
//Route::middleware(['auth:sanctum', 'ability:getReviews'])->group(function () {
    //Route::get('/reviews', ReviewsController::class);
    //Route::apiResource('review', ReviewController::class);        // SPRINT 2
//});
