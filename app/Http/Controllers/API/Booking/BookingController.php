<?php

namespace App\Http\Controllers\API\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\BookingPostRequest;
use App\Models\Booking;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $bookings = Booking::all();

        return response()->json($bookings, Response::HTTP_OK);
    }

    /**
     * It creates a new Booking object and saves it to the database.
     *
     * @param  BookingPostRequest $request The request object.
     * 
     * @return JsonResponse of the newly created object.
     */
    public function store(BookingPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $booking = new Booking;
        $booking->setRawAttributes($validatedData);
        $booking->save();

        return response()->json($booking, Response::HTTP_CREATED);
    }

    /**
     * Display the specified `Booking` by its id.
     *
     * @param  Booking $booking The model name
     * @return JsonResponse of the Booking model.
     */
    public function show(Booking $booking): JsonResponse
    {
        return response()->json($booking, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
        return response()->json('RTFM', Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * It deletes the booking from the database.
     *
     * @param  Booking  $booking The model that we're using.
     * 
     * @return JsonResponse of the deleted object.
     */
    public function destroy(Booking $booking): JsonResponse
    {
        $msg = [
            'message' => "Deleted.",
            'deletedObject' => $booking
        ];

        $booking->delete();

        return response()->json($msg, Response::HTTP_OK);
    }
}
