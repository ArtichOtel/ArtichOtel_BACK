<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RoomsType;

class RoomsTypesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $roomsTypes = RoomsType::all();

        return response()->json($roomsTypes, 200);
    }
}
