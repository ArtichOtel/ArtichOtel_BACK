<?php

namespace App\Http\Controllers\API\Advantage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advantage;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {

        $validateAdvantage = Validator::make($request->all(), [
            'title' => ['required', 'max:60', 'string:ascii'],
            'description' => ['required', 'max:300', 'string:ascii'],
            'icon' => ['required', 'max:20', 'string:ascii'],
            'order' => ['required', 'numeric:integer'],
        ]);

        if ($validateAdvantage->fails()) {
            return response()->json([
                'message' => 'validation error',
                'errors' => $validateAdvantage->errors()
            ], 400);
        }

        $validatedReq = $validateAdvantage->validated();

        $newAdvantage = new Advantage;
        foreach ($validatedReq as $key => $value) {
            $newAdvantage["{$key}"] = $value;
        }

        $newAdvantage->save();

        return response()->json($newAdvantage);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $advantage = Advantage::findOrFail($id);

        return response()->json($advantage);
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

        $validateAdvantage = Validator::make($request->all(), [
            'title' => ['sometimes', 'max:60', 'string:ascii'],
            'description' => ['sometimes', 'max:300', 'string:ascii'],
            'icon' => ['sometimes', 'max:20', 'string:ascii'],
            'order' => ['sometimes', 'numeric:integer'],
        ]);

        if ($validateAdvantage->fails()) {
            return response()->json([
                'message' => 'validation error',
                'errors' => $validateAdvantage->errors()
            ], 400);
        }

        $advantage = Advantage::findOrFail($id);
        $validatedReq = $validateAdvantage->validated();

        foreach($validatedReq as $key => $value) {
            $advantage["{$key}"] = $value;
        }

        $advantage->save();

        return response()->json($advantage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $advantage = Advantage::findOrFail($id);

        $advantage->delete();

        return response()->json(Advantage::all());
    }
}
