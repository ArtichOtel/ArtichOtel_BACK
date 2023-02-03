<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //$erroMsg = "Perhaps you wanted one of these: GET /Offer/{id} || GET /Offers";

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
            'title' => 'required|max:60',
            'description' => 'required|max:300',
            'url_image' => 'required|max:255',
        ]);

        $newOffer = new Offer([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'url_image' => $request->get('url_image'),
        ]);

        $newOffer->save();

        return response()->json($newOffer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $offer = Offer::findOrFail($id);

        return response()->json($offer);
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
        $offer = Offer::findOrFail($id);

        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|max:300',
            'url_image' => 'required|max:255',
        ]);

        $offer->title = $request->get('title');
        $offer->description = $request->get('description');
        $offer->url_image = $request->get('url_image');

        $offer->save();

        return response()->json($offer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $offer = Offer::findOrfail($id);

        $offer->delete();

        return response()->json(Offer::all());
    }
}
