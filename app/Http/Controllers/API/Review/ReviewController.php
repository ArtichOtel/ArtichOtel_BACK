<?php

namespace App\Http\Controllers\API\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

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
        return response()->json("RTFM", 405);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'note' => 'required',
            'customer_id' => 'required'
    ]);

        $newReview = new Review([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'note' => $request->get('note'),
            'customer_id' => $request->get('customer_id'),
        ]);

        $newReview->save();

        return response()->json($newReview, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
        $review = Review::findOrFail($id);
        return response()->json($review, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        //
        $review = Review::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'note' => 'required',
            'customer_id' => 'required'
        ]);

        $review->title = $request->get('title');
        $review->description = $request->get('description');
        $review->note = $request->get('note');
        $review->customer_id = $request->get('customer_id');

        $review->save();

        return response()->json($review, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        //
        $review = Review::findOrFail($id);
        $review->delete();

        return response()->json($review::all());
    }
}
