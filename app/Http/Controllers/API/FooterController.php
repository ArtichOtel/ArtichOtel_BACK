<?php

namespace App\Http\Controllers\API;

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
        // Recup all Footers
        $Footers =  Footer::all();

        // Return all information Footers in JSON
        return response()->json($Footers, 200);
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
            'title' => 'required',
            'order' => 'required',
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
        $Footer = Footer::findOrFail($id);
        return response()->json($Footer, 200);
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
        $Footer = Footer::findOrFail($id);

        $request->validate([
            'title' => 'required', //|max:60',
            'order' => 'required', //'required|max:60',

        ]);

        $Footer->title = $request->get('title');
        $Footer->order = $request->get('order');

        $Footer->save();

        return response()->json($Footer, 200);
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
        $Footer = Footer::findOrFail($id);
        $Footer->delete();

        return response()->json($Footer::all());
    }
}
