<?php

namespace App\Http\Controllers\API\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\BookingPostRequest;
use App\Http\Requests\Booking\BookingUpdateRequest;
use App\Models\Booking;
use App\Models\Booking_Optional_service;
use App\Notifications\BookingConfirmation;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

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
     * @param Booking $booking The model name
     * @param BookingUpdateRequest $request The request object
     *
     * @return JsonResponse
     */
    public function update(BookingUpdateRequest $request, Booking $booking): JsonResponse
    {
        $validatedData = $request->validated();

        // force change to update updated-at column
        $booking->update(['status'=>'']);

        // apply user changes
        $booking->update($validatedData);

        // update bookings_optianl_services
        $listOfOptId = $request->get('optional_services_id');

        // cleaning whole
        foreach (['1','2','3','4','5','6'] as $optId) {
                $booking->optionalServices()->detach($optId);
        }

        foreach ($listOfOptId as $optId) {
            $booking->optionalServices()->attach($optId);
        }


        $bookingWithOpt = Booking::query()
            ->with('optionalServices')
            ->withAggregate('customer', 'first_name')
            ->withAggregate('customer', 'last_name')
            ->where('bookings.id', '=', $booking->id)
            ->get();

        //$bookingWithOpt->notify(new BookingConfirmation());

        //Notification::route('mail')

        return response()->json($bookingWithOpt, Response::HTTP_OK);
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
