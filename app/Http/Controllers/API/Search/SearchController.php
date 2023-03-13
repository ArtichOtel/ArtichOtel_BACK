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

        $roomsGoodType = RoomsType::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id as room_id')
            ->join('rooms', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->where('rooms_types.id', '=', $type)
            ->get()->toArray();

        $bookedRooms = RoomsType::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id as room_id')
            ->join('rooms', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->join('bookings', 'bookings.room_id', '=', 'rooms.id')
            ->whereBetween('bookings.end_date', [$queryDateS, $queryDateE])
            ->orWhereBetween('bookings.begin_date', [$queryDateS, $queryDateE])
            ->orWhere(function ($query) use ($queryDateE, $queryDateS) {
                $query
                    ->where('bookings.begin_date', '<', $queryDateS)
                    ->where('bookings.end_date', '>', $queryDateE);
            })
            ->where('rooms_types.id', '=', $type)
            ->groupby('room_id')
            ->get()->toArray();

        $result = [];

        foreach ($roomsGoodType as $rgt) {
            if (array_search($rgt, $bookedRooms, false) === false) {
                array_push($result, $rgt);
            }
        }

        return response()->json($result, Response::HTTP_OK);
    }
}
