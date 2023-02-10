<?php

namespace App\Http\Controllers\API\Footer;

use App\Models\Footer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Footer\FooterPostRequest;
use App\Http\Requests\Footer\FooterUpdateRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;




class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Recup all Footers
        $footers = Footer::all();

        // Return all information Footers in JSON
        return response()->json($footers, Response::HTTP_OK);
    }


    /**
     * It creates a new Footer object and saves it to the database.
     *
     * @param FooterPostRequest $request The request object.
     *
     * @return JsonResponse of the newly created object.
     */
    public function store(FooterPostRequest $request): JsonResponse
    {
        $validateData = $request->validated();
        $footer = new Footer;
        $footer->setRawAttributes($validateData);
        $footer->save();

        return response()->json($footer, Response::HTTP_CREATED);
    }


    /**
     * Display the specified `Footer` by its id.
     *
     * @param Footer $footer The model name.
     *
     * @return JsonResponse
     */
    public function show(Footer $footer): JsonResponse
    {
        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     * It takes an FooterUpdateRequest, validates it, and then updates the Footer model with the
     * validated data
     *
     * @param FooterUpdateRequest $request The request object.
     * @param Footer $footer The model that we're updating.
     *
     * @return JsonResponse that was updated.
     */
    public function update(FooterUpdateRequest $request, Footer $footer): JsonResponse
    {
        $validatedData = $request->validated();
        $footer->update($validatedData);

        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     * It deletes the footer from the database.
     *
     * @param Footer $footer The model that we're using.
     *
     * @return JsonResponse
     */
    public function destroy(Footer $footer): JsonResponse
    {
        $footer->delete();

        return response()->json($footer::all(), Response::HTTP_OK);
    }
}
