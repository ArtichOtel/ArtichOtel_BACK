<?php

namespace App\Http\Controllers\API\NewInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewInfo\NewInfoPostRequest;
use App\Http\Requests\NewInfo\NewInfoUpdateRequest;
use App\Models\NewInfo;
// use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json("RTFM", 405);
    }

    /**
     * It creates a new NewInfo object and saves it to the database.
     *
     * @param  NewInfoPostRequest request The request object.
     * 
     * @return \Illuminate\Http\JsonResponse of the newly object.
     */
    public function store(NewInfoPostRequest $request)
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
     * @param  NewInfo newInfo The model name
     * 
     * @return \Illuminate\Http\JsonResponse of the NewInfo model.
     */
    public function show(NewInfo $newInfo)
    {
        return response()->json($newInfo, Response::HTTP_OK);
    }

    /**
     * It takes a NewInfoUpdateRequest, validates it, and then updates the NewInfo model with the
     * validated data.
     *
     * @param  NewInfoUpdateRequest request The request object.
     * @param  NewInfo newInfo The model that we're updating.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(NewInfoUpdateRequest $request, NewInfo $newInfo)
    {
        $validatedData = $request->validated();

        $newInfo->update($validatedData);

        return response()->json($newInfo, Response::HTTP_OK);
    }

    /**
     * It deletes the newInfo from the database.
     *
     * @param  NewInfo newInfo The model that we're using.
     * 
     * @return \Illuminate\Http\JsonResponse of all newInfos in the database.
     */
    public function destroy(NewInfo $newInfo)
    {
        $newInfo->delete();

        return response()->json(NewInfo::all(), Response::HTTP_OK);
    }
}
