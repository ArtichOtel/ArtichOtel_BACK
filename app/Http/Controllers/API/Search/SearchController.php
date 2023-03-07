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
        // dd($queryDateE, $queryDateS);

        $roomsGoodType = Room::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id as room_id')
            ->join('rooms_types', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->where('rooms_types.id', '=', $type)
            ->groupby('room_id')
            ->get();

        $bookedRoom = Room::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id as room_id')
            ->join('rooms_types', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->join('bookings', 'bookings.rooms_id', '=', 'rooms.id')
            ->where('rooms_types.id', '=', $type)
            ->orWhere(function ($query) {
            })
            ->whereBetween('bookings.end_date', [$queryDateS, $queryDateE])
            ->whereBetween('bookings.begin_date', [$queryDateS, $queryDateE])
            ->get();

        //$result = $roomsGoodType


        return response()->json([$roomsGoodType, $bookedRoom], Response::HTTP_OK);


        //         SELECT rooms_types.title, rooms_types.url_image, rooms_types.description, rooms_types.price, rooms.number, rooms.id as room_id 
        // FROM rooms JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id JOIN bookings ON bookings.rooms_id = rooms.id WHERE rooms_types.id = 1 AND NOT ( (bookings.begin_date BETWEEN "2023-05-12" AND "2023-05-14" ) OR (bookings.end_date BETWEEN "2023-05-12" AND "2023-05-14" ) );


        //         SELECT rooms_types.title, rooms_types.url_image, rooms_types.description, rooms_types.price, rooms.number, rooms.id as room_id 
        // FROM rooms 
        // JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id 
        // JOIN bookings ON bookings.rooms_id = rooms.id WHERE rooms_types.id = 1 
        // AND NOT ( 
        //     (bookings.begin_date NOT BETWEEN "2023-03-06" AND "2023-03-14" ) AND (bookings.end_date NOT BETWEEN "2023-03-06" AND "2023-03-14" )
        // );


        //     CREATE VIEW v AS SELECT rooms_types.title, rooms_types.url_image, rooms_types.description, rooms_types.price, rooms.number, rooms.id as room_id
        // FROM rooms 
        // JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id 
        // LEFT JOIN bookings ON bookings.rooms_id = rooms.id
        // WHERE rooms_types.id = 1
        // AND (
        //     bookings.begin_date BETWEEN "2023-03-06" AND "2023-03-14"
        // OR 
        //     bookings.end_date BETWEEN "2023-03-06" AND "2023-03-14");

        //     CREATE VIEW t AS SELECT rooms_types.title, rooms_types.url_image, rooms_types.description, rooms_types.price, rooms.number, rooms.id as room_id 
        // FROM rooms JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id JOIN bookings ON bookings.rooms_id = rooms.id WHERE rooms_types.id = 1 AND NOT ( (bookings.begin_date BETWEEN "2023-05-12" AND "2023-05-14" ) OR (bookings.end_date BETWEEN "2023-05-12" AND "2023-05-14" ) )
        // GROUP BY room_id;

        // SELECT * FROM t WHERE room_id NOT IN (SELECT * FROM v);

        // SELECT rooms_types.title, rooms_types.url_image, rooms_types.description, rooms_types.price, rooms.number, rooms.id as room_id 
        // FROM rooms
        // JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id 
        // JOIN bookings ON bookings.rooms_id = rooms.id WHERE rooms_types.id = 1
        // GROUP BY room_id
        // NOT IN (
        // 	SELECT rooms.id as room_id
        //         FROM rooms 
        //         JOIN rooms_types ON rooms.roomstypes_id = rooms_types.id 
        //         JOIN bookings ON bookings.rooms_id = rooms.id
        //         WHERE rooms_types.id = 1
        //         AND (
        //             bookings.begin_date BETWEEN "2023-03-06" AND "2023-03-14"
        //         OR 
        //             bookings.end_date BETWEEN "2023-03-06" AND "2023-03-14")


    }
}
