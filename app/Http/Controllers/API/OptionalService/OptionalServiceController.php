<?php

namespace App\Http\Controllers\API\OptionalService;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionalService\OptionalServicePostRequest;
use App\Http\Requests\OptionalService\OptionalServiceUpdateRequest;
use App\Models\Optional_service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OptionalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $optionalServices = Optional_service::all();

        return response()->json($optionalServices, Response::HTTP_OK);
    }

    /**
     * It creates a new OptionalService object and saves it to the database.
     *
     * @param  OptionalServicePostRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(OptionalServicePostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $optionalService = new Optional_service;
        $optionalService->setRawAttributes($validatedData);
        $optionalService->save();

        return response()->json($optionalService, Response::HTTP_CREATED);
    }

    /**
     * Display the specified 'OptionalService' by its id.
     *
     * @param  Optional_service  $optionalService The model name.
     *
     * @return JsonResponse of the OptionalService model.
     */
    public function show(Optional_service $optionalService): JsonResponse
    {
        return response()->json($optionalService, Response::HTTP_OK);
    }

    /**
     * It takes an OptionalServiceUpdateRequest, validates it, and then updates the OptionalService model with the
     * validated data
     *
     * @param  OptionalServiceUpdateRequest $request the request object.
     * @param  Optional_service $optionalService The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(OptionalServiceUpdateRequest $request, Optional_service $optionalService): JsonResponse
    {
        $validatedData = $request->validated();

        $optionalService->update($validatedData);

        return response()->json($optionalService, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Optional_service $optionalService The model that we're using.
     *
     * @return JsonResponse of all the optionalServices in the database.
     */
    public function destroy(Optional_service $optionalService): JsonResponse
    {
        $optionalService->delete();

        return response()->json(Optional_service::all(), Response::HTTP_OK);
    }
}
