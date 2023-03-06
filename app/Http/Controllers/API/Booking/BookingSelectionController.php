<?php

namespace App\Http\Controllers\API\Booking;

use App\Models\RoomsType;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class BookingSelectionController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $type = $request->query('type');

        $roomsTypes = RoomsType::query()
            ->select('rooms_types.title', 'rooms_types.url_image', 'rooms_types.description', 'rooms_types.price', 'rooms.number', 'rooms.id')
            ->join('rooms', 'rooms.roomstypes_id', '=', 'rooms_types.id')
            ->join('bookings', 'bookings.rooms_id', '=', 'rooms.id')
            ->where('rooms_types.id', '=', $type)
            ->get();


        return response()->json($roomsTypes, Response::HTTP_OK);
    }
}
