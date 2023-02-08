<?php


use Illuminate\Http\Request;
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

// GUESTS routes
Route::post('/user/login', LoginController::class);
Route::middleware(['auth:sanctum', 'ability:doAnything'])->group(function () {
    Route::get('/user/logout', LogoutController::class);
});




// GOD admin routes
Route::middleware(['auth:sanctum', 'ability:doAnything'])->group(function () {
    Route::apiResource('users', UsersController::class);
    Route::get('/sections', SectionController::class);
    Route::apiResource('hero', HeroController::class);
    Route::get('/offers', OffersController::class);
    Route::apiResource('offer', OfferController::class);
    Route::get('/advantages', AdvantagesController::class);
    Route::apiResource('advantage', AdvantageController::class);
    Route::get('/news', NewInfosController::class);
    Route::apiResource('new', NewInfoController::class);
    Route::apiResource('video', VideoController::class);
    Route::get('/reviews', ReviewsController::class);
    //Route::apiResource('review', ReviewController::class);        // SPRINT 2
    Route::get('/footers', FootersController::class);
    Route::apiResource('footer', FooterController::class);
    Route::get('/room-types', RoomsTypesController::class);
    Route::get('/links', LinksController::class);
    Route::apiResource('link', LinkController::class);
});


// CUSTOMERS routes
//Route::middleware(['auth:sanctum', 'ability:getReviews'])->group(function () {
    //Route::get('/reviews', ReviewsController::class);
    //Route::apiResource('review', ReviewController::class);        // SPRINT 2
//});
