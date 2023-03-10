<?php

namespace App\Http\Controllers\API\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\OfferPostRequest;
use App\Http\Requests\Offer\OfferUpdateRequest;
use Illuminate\Http\JsonResponse;
use App\Models\Offer;
use Symfony\Component\HttpFoundation\Response;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $offers = Offer::all();

        return response()->json($offers, Response::HTTP_OK);
    }

    /**
     * It creates a new Offer object and saves it to the database.
     *
     * @param  OfferPostRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(OfferPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $offer = new Offer;
        $offer->setRawAttributes($validatedData);
        $offer->save();

        return response()->json($offer, Response::HTTP_CREATED);
    }

    /**
     * Display the specified `Offer` by its id.
     *
     * @param  Offer $offer The model name.
     *
     * @return JsonResponse of the Offer model.
     */
    public function show(Offer $offer): JsonResponse
    {
        return response()->json($offer, Response::HTTP_OK);
    }

    /**
     * It takes an OfferUpdateRequest, validates it, and then updates the Offer model with the
     * validated data
     *
     * @param  OfferUpdateRequest $request The request object.
     * @param  Offer $offer The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(OfferUpdateRequest $request, Offer $offer): JsonResponse
    {
        $validatedData = $request->validated();

        $offer->update($validatedData);

        return response()->json($offer, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Offer $offer The model that we're using.
     *
     * @return JsonResponse of all the offers in the database.
     */
    public function destroy(Offer $offer): JsonResponse
    {
        $offer->delete();

        return response()->json(Offer::all(), Response::HTTP_OK);
    }
}
