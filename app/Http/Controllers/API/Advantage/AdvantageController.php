<?php

namespace App\Http\Controllers\API\Advantage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Advantage\AdvantagePostRequest;
use App\Http\Requests\Advantage\AdvantageUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Advantage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
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
        return response()->json("RTFM", 405);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Advantage $advantage)
    {
        // $advantage = Advantage::findOrFail($id);

        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdvantageUpdateRequest $request, Advantage $advantage)
    {
        $validatedData = $request->validated();

        $advantage->update($validatedData);

        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Advantage $advantage)
    {
        $advantage->delete();

        return response()->json(Advantage::all(), Response::HTTP_OK);
    }
}
