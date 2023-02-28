<?php

namespace App\Http\Controllers\API\Rooms;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Room\RoomUpdateRequest;
use Symfony\Component\HttpFoundation\Response;

class RoomController extends Controller
{

    /**
     * Display a listing of the resources
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Recup all rooms
        $rooms =  Room::all();

        // Return all information Rooms in JSON
        return response()->json($rooms, Response::HTTP_OK);
    }


    /**
     * It creates a new Link object and saves it to the database.
     *
     *
     * @return JsonResponse of the new object.
     */
    public function store(): JsonResponse
    {

        return response()->json("Method not allowed", Response::HTTP_METHOD_NOT_ALLOWED);
    }


    /**
     * Display the specified `Link` by its id
     *
     * @param Room $room The model name
     *
     * @return JsonResponse of the Link model.
     */
    public function show(Room $room): JsonResponse
    {
        return response()->json($room, Response::HTTP_OK);
    }

    /**
     * It takes an LinkUpdateRequest, validates it, and then updates the Link model with the
     * validated data
     *
     * @param RoomUpdateRequest $request The request object.
     * @param Room $room The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(RoomUpdateRequest $request, Room $room): JsonResponse
    {
        $validatedData = $request->validated();

        $room->update($validatedData);

        return response()->json($room, Response::HTTP_OK);
    }

    /**
     *
     * It deletes the advantage from the database.
     *
     * @param Room $room The model that we're using.
     *
     * @return JsonResponse of all the links in the database.
     */
    public function destroy(Room $room): JsonResponse
    {
        // $room->delete();

        return response()->json("Method not allowed", Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
