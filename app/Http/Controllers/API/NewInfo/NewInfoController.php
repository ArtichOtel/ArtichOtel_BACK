<?php

namespace App\Http\Controllers\API\NewInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewInfo\NewInfoPostRequest;
use App\Http\Requests\NewInfo\NewInfoUpdateRequest;
use App\Models\NewInfo;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class NewInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $newInfos = NewInfo::all();

        return response()->json($newInfos, Response::HTTP_OK);
    }

    /**
     * It creates a new NewInfo object and saves it to the database.
     *
     * @param  NewInfoPostRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(NewInfoPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $newInfo = new NewInfo;
        $newInfo->setRawAttributes($validatedData);
        $newInfo->save();

        return response()->json($newInfo, Response::HTTP_CREATED);
    }

    /**
     * Display the specified `NewInfo` byt its id.
     *
     * @param  NewInfo $newInfo The model name
     *
     * @return JsonResponse of the NewInfo model.
     */
    public function show(NewInfo $newInfo): JsonResponse
    {
        return response()->json($newInfo, Response::HTTP_OK);
    }

    /**
     * It takes a NewInfoUpdateRequest, validates it, and then updates the NewInfo model with the
     * validated data.
     *
     * @param  NewInfoUpdateRequest $request The request object.
     * @param  NewInfo $newInfo The model that we're updating.
     *
     * @return JsonResponse
     */
    public function update(NewInfoUpdateRequest $request, NewInfo $newInfo): JsonResponse
    {
        $validatedData = $request->validated();

        $newInfo->update($validatedData);

        return response()->json($newInfo, Response::HTTP_OK);
    }

    /**
     * It deletes the newInfo from the database.
     *
     * @param  NewInfo $newInfo The model that we're using.
     *
     * @return JsonResponse of all newInfos in the database.
     */
    public function destroy(NewInfo $newInfo): JsonResponse
    {
        $newInfo->delete();

        return response()->json(NewInfo::all(), Response::HTTP_OK);
    }
}
