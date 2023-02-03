<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;



class LinkController extends Controller
{
    /**
     * Display a listing of the resources
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Recup all Links
        $Links =  Link::all();

        // Return all information Links in JSON
        return response()->json($Links, 200);
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
            'text' => 'required',
            'url' => 'required',
            'icon' => 'required'
        ]);

        $newLinkes = new Link([
            'text' => $request->get('text'),
            'url' => $request->get('url'),
            'icon' => $request->get('icon'),
        ]);

        $newLinkes->save();

        return response()->json($newLinkes, 200);
    }


    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $Link = Link::findOrFail($id);
        return response()->json($Link, 200);
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
        $Link = Link::findOrFail($id);

        $request->validate([
            'text' => 'required', //|max:60',
            'url' => 'required', //'required|max:60',
            'icon' => 'required'
        ]);

        $Link->text = $request->get('text');
        $Link->url = $request->get('url');
        $Link->icon = $request->get('icon');

        $Link->save();

        return response()->json($Link, 200);
    }



    /**
     * 
     * Remove the specified Link from the storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $Link = Link::findOrFail($id);
        $Link->delete();

        return response()->json($Link::all());
    }
}
