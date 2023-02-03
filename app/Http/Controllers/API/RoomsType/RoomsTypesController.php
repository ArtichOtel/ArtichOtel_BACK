<?php

namespace App\Http\Controllers\API\RoomsType;

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
        $roomsType = RoomsType::all();

        return response()->json($roomsType, 200);
    }
}
