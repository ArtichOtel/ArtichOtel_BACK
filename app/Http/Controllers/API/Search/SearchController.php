<?php

namespace App\Http\Controllers\API\Search;

use App\Models\RoomsType;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $type = $request->query('type');
        $queryDateS = $request->query('startDate');
        $queryDateE = $request->query('endDate');

        $roomsTypes = Room::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id')
            ->join('rooms_types', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->where('rooms_types.id', '=', $type)
            ->where($queryDateS, '>',)
            ->get();


        return response()->json($roomsTypes, Response::HTTP_OK);
    }
}
