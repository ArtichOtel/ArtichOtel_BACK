<?php

namespace App\Http\Controllers\API\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Review\ReviewUpdateRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // no  list at this uri
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ReviewUpdateRequest $request)
    {
        $validatedData =  $request->validate();
        $review = new Review;
        $review->setRawAttributes($validatedData);
        $review->save();

        return response()->json($review, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Review $review)
    {
        return response()->json($review, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ReviewUpdateRequest $request, Review $review)
    {
        $validatedData = $request->validate();
        $review->update($validatedData);

        return response()->json($review, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json($review::all(), Response::HTTP_OK);
    }
}
