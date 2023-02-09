<?php

namespace App\Http\Controllers\API\Link;

use App\Http\Controllers\Controller;
use App\Http\Requests\Link\LinkPostRequest;
use App\Http\Requests\Link\LinkUpdateRequest;
use App\Models\Link;
// use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LinkController extends Controller
{
    /**
     * Display a listing of the resources
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json("RTFM", 405);
    }


    /**
     * It creates a new Link object and saves it to the database.
     *
     * @param LinkPostRequest $request The request object.
     *
     * @return JsonResponse of the new object.
     */
    public function store(LinkPostRequest $request)
    {
        $validatedData = $request->validated();
        $link = new Link;
        $link->setRawAttributes($validatedData);
        $link->save();

        return response()->json($link, Response::HTTP_CREATED);
    }


    /**
     * Display the specified `Link` by its id
     *
     * @param Link $link The model name
     *
     * @return JsonResponse of the Link model.
     */
    public function show(Link $link)
    {
        return response()->json($link, Response::HTTP_OK);
    }

    /**
     * It takes an LinkUpdateRequest, validates it, and then updates the Link model with the
     * validated data
     *
     * @param LinkUpdateRequest $request The request object.
     * @param Link $link The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(LinkUpdateRequest $request, Link $link)
    {
        $validatedData = $request->validated();

        $link->update($validatedData);

        return response()->json($link, Response::HTTP_OK);
    }

    /**
     *
     * It deletes the advantage from the database.
     *
     * @param Link $link The model that we're using.
     *
     * @return JsonResponse of all the links in the database.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return response()->json(Link::all(), Response::HTTP_OK);
    }
}
