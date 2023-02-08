<?php

namespace App\Http\Controllers\API\Review;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReviewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  Symfony\Component\HttpFoundation\Response
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        // get the list of review
        $reviews = Review::all();

        return response()->json($reviews, Response::HTTP_OK);
    }
}
