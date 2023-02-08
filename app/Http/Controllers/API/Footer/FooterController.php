<?php

namespace App\Http\Controllers\API\Footer;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;



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

        return response()->json($error, 405);
    }


    /**
     * Display a listing of the resources
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:60', 'alpha_num:ascii'],
            'order' => ['required', 'numeric:integer'],

        ]);

        $newFooteres = new Footer([
            'title' => $request->get('title'),
            'order' => $request->get('order'),
        ]);

        $newFooteres->save();

        return response()->json($newFooteres, 200);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $footer = Footer::findOrFail($id);
        return response()->json($footer, 200);
    }



    /**
     *  Update the specified resource in storage.
     *
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);

        $request->validate([
            'title' => ['max:60', 'alpha_num:ascii'],
            'order' => ['numeric:integer'],
            
        ]);

        $footer->title = $request->get('title');
        $footer->order = $request->get('order');

        $footer->save();

        return response()->json($footer, 201);
    }



    /**
     *
     * Remove the specified Footer from the storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return response()->json($footer::all());
    }
}
