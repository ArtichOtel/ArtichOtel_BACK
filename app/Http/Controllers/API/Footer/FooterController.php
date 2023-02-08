<?php

namespace App\Http\Controllers\API\Footer;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Footer\FooterPostRequest;
use App\Http\Requests\Footer\FooterUpdateRequest;



class FooterController extends Controller
{
    /**
     * Display a listing of the resources
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // no lists at this uri
        $error = "RTFM";

        return response()->json($error, Response::HTTP_METHOD_NOT_ALLOWED);
    }


    /**
     * Display a listing of the resources
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(FooterPostRequest $request)
    {
        $validateData = $request->validate();
        $footer = new Footer;
        $footer->setRawAttributes($validateData);
        $footer->save();

        return response()->json($footer, Response::HTTP_OK);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Footer $footer)
    {
        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     *  Update the specified resource in storage.
     *
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param \Illuminate\Http\JsonResponse
     */
    public function update(FooterUpdateRequest $request, Footer $footer)
    {
        $validateData = $request->validate();
        $footer->update($validateData);

        return response()->json($footer, Response::HTTP_OK);
    }



    /**
     *
     * Remove the specified Footer from the storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return response()->json($footer::all(), Response::HTTP_OK);
    }
}
