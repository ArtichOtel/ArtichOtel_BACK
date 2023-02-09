<?php

namespace App\Http\Controllers\API\Advantage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Advantage\AdvantagePostRequest;
use App\Http\Requests\Advantage\AdvantageUpdateRequest;
// use Illuminate\Http\Request;
use App\Models\Advantage;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $advantages = Advantage::all();

        return response()->json($advantages, Response::HTTP_OK);
    }

    /**
     * It creates a new Advantage object and saves it to the database.
     * 
     * @param AdvantagePostRequest request The request object.
     * 
     * @return \Illuminate\Http\JsonResponse of the newly object.
     */
    public function store(AdvantagePostRequest $request)
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
     * @param Advantage advantage The model name
     * 
     * @return \Illuminate\Http\JsonResponse of the Advantage model.
     */
    public function show(Advantage $advantage)
    {
        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * It takes an AdvantageUpdateRequest, validates it, and then updates the Advantage model with the
     * validated data
     * 
     * @param AdvantageUpdateRequest request The request object.
     * @param Advantage advantage The model that we're updating.
     * 
     * @return \Illuminate\Http\JsonResponse that was updated.
     */
    public function update(AdvantageUpdateRequest $request, Advantage $advantage)
    {
        $validatedData = $request->validated();

        $advantage->update($validatedData);

        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * It deletes the advantage from the database.
     * 
     * @param Advantage advantage The model that we're using.
     * 
     * @return \Illuminate\Http\JsonResponse of all the advantages in the database.
     */
    public function destroy(Advantage $advantage)
    {
        $advantage->delete();

        return response()->json(Advantage::all(), Response::HTTP_OK);
    }
}
