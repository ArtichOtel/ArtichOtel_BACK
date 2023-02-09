<?php

namespace App\Http\Controllers\API\Review;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReviewsController extends Controller
{
    /**
     * It returns a JSON response of all the reviews in the database
     * 
     * @return \Illuminate\Http\JsonResponse with all the reviews.
     */
    public function __invoke()
    {
        // get the list of review
        $reviews = Review::all();

        return response()->json($reviews, Response::HTTP_OK);
    }
}
