<?php

namespace App\Http\Controllers\API\Booking;

use App\Models\RoomsType;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class BookingSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return JsonResponse
     */
    public function index()
    {
        $roomsTypes =  RoomsType::query()
            ->select('title', 'url_image', 'price')
            ->get();

        return response()->json($roomsTypes, Response::HTTP_OK);
    }

    public function store(): JsonResponse
    {
        return response()->json("RTF", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function show(): JsonResponse
    {
        return response()->json("RTF", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function update(): JsonResponse
    {
        return response()->json("RTF", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function destroy(): JsonResponse
    {
        return response()->json("RTF", Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
