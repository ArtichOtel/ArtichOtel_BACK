<?php

namespace App\Http\Controllers\API\RoomsType;

use App\Http\Controllers\Controller;
use App\Models\RoomsType;
use Symfony\Component\HttpFoundation\Response;

class RoomsTypesController extends Controller
{
    /**
     * It returns a JSON response of all the rooms types in the database
     * 
     * @return \Illuminate\Http\JsonResponse with all the rooms types.
     */
    public function __invoke()
    {
        $roomsTypes = RoomsType::all();

        return response()->json($roomsTypes, Response::HTTP_OK);
    }
}
