<?php

namespace App\Http\Controllers\API\Advantage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Advantage\AdvantagePostRequest;
use App\Http\Requests\Advantage\AdvantageUpdateRequest;
use App\Models\Advantage;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $advantages = Advantage::all();

        return response()->json($advantages, Response::HTTP_OK);
    }

    /**
     * It creates a new Advantage object and saves it to the database.
     *
     * @param AdvantagePostRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(AdvantagePostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $advantage = new Advantage;
        $advantage->setRawAttributes($validatedData);
        $advantage->save();

        return response()->json($advantage, Response::HTTP_CREATED);
    }

    /**
     * Display the specified `Advantage` by its id
     *
     * @param Advantage $advantage The model name
     *
     * @return JsonResponse of the Advantage model.
     */
    public function show(Advantage $advantage): JsonResponse
    {
        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * It takes an AdvantageUpdateRequest, validates it, and then updates the Advantage model with the
     * validated data
     *
     * @param AdvantageUpdateRequest $request The request object.
     * @param Advantage $advantage The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(AdvantageUpdateRequest $request, Advantage $advantage): JsonResponse
    {
        $validatedData = $request->validated();

        $advantage->update($validatedData);

        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * It deletes the advantage from the database.
     *
     * @param Advantage $advantage The model that we're using.
     *
     * @return JsonResponse of all the advantages in the database.
     */
    public function destroy(Advantage $advantage): JsonResponse
    {
        $advantage->delete();

        return response()->json(Advantage::all(), Response::HTTP_OK);
    }
}
