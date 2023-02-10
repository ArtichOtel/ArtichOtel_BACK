<?php

namespace App\Http\Controllers\API\Review;

use App\Models\Review;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Review\ReviewUpdateRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // no  list at this uri
        $reviews = Review::all();

        return response()->json($reviews, Response::HTTP_OK);
    }

    /**
     * It creates a new Review object and saves it to the database.
     *
     * @param ReviewUpdateRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(ReviewUpdateRequest $request): JsonResponse
    {
        $validatedData =  $request->validated();
        $review = new Review;
        $review->setRawAttributes($validatedData);
        $review->save();

        return response()->json($review, Response::HTTP_CREATED);
    }

    /**
     * Display the specified `Review` by its id
     *
     * @param Review $review The model name
     *
     * @return JsonResponse of the Review model.
     */
    public function show(Review $review): JsonResponse
    {
        return response()->json($review, Response::HTTP_OK);
    }

    /**
     * It takes a ReviewUpdateRequest, validates it, and then updates the Review model with the
     * validated data
     *
     * @param ReviewUpdateRequest $request The request object.
     * @param Review $review  The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(ReviewUpdateRequest $request, Review $review): JsonResponse
    {
        $validatedData = $request->validated();
        $review->update($validatedData);

        return response()->json($review, Response::HTTP_OK);
    }

    /**
     * It deletes the review from the database.
     *
     * @param Review $review The model that we're using.
     *
     * @return JsonResponse of all the reviews in the database.
     */
    public function destroy(Review $review): JsonResponse
    {
        $review->delete();

        return response()->json($review::all(), Response::HTTP_OK);
    }
}
