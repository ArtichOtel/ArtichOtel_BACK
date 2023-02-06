<?php

namespace App\Http\Controllers\API\Link;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;



class LinkController extends Controller
{
    /**
     * Display a listing of the resources
     * Not implemented
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json("RTFM", 404);
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
            'text' => ['required', 'max:20', 'alpha_num:ascii'],
            'url' => ['url', 'max:255'],
            'icon' => ['alpha_num:ascii', 'max:20']
        ]);

        $newLinks = new Link([
            'text' => $request->get('text'),
            'url' => $request->get('url'),
            'icon' => $request->get('icon'),
        ]);

        $newLinks->save();

        return response()->json($newLinks, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $link = Link::findOrFail($id);
        return response()->json($link, 200);
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
        $link = Link::findOrFail($id);

        $request->validate([
            'text' => ['max:20', 'alpha_num:ascii'],
            'url' => ['url', 'max:255'],
            'icon' => ['alpha_num:ascii', 'max:20']
        ]);

        $link->text = $request->get('text');
        $link->url = $request->get('url');
        $link->icon = $request->get('icon');

        $link->save();

        return response()->json($link, 200);
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
        $link = Link::findOrFail($id);
        $link->delete();

        return response()->json($link::all());
    }
}
