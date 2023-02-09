<?php

namespace App\Http\Controllers\API\Footer;

use App\Models\Footer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Footer\FooterPostRequest;
use App\Http\Requests\Footer\FooterUpdateRequest;
use Symfony\Component\HttpFoundation\Response;




class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Recup all Footers
        $footers = Footer::all();

        // Return all information Footers in JSON
        return response()->json($footers, Response::HTTP_OK);
    }


    /**
     * It creates a new Footer object and saves it to the database.
     *
     * @param FooterPostRequest request The request object.
     * 
     * @return \Illuminate\Http\JsonResponse of the newly object.
     */
    public function store(FooterPostRequest $request)
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
     * @param Footer footer The model name.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Footer $footer)
    {
        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     * It takes an FooterUpdateRequest, validates it, and then updates the Footer model with the
     * validated data
     *
     * @param FooterUpdateRequest request The request object.
     * @param Footer footer The model that we're updating.
     * 
     * @return \Illuminate\Http\JsonResponse that was updated.
     */
    public function update(FooterUpdateRequest $request, Footer $footer)
    {
        $validatedData = $request->validated();
        $footer->update($validatedData);

        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     * It deletes the footer from the database.
     *
     * @param Footer footer The model that we're using.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return response()->json($footer::all(), Response::HTTP_OK);
    }
}
