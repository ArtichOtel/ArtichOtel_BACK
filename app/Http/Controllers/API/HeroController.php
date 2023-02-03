<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;



class HeroController extends Controller
{
    /**
     * Display a listing of the resources
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Recup all Heros
        $heroes =  Hero::all();

        // Return all information Heros in JSON
        return response()->json($heroes, 200);
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
            'subtitle' => 'required',
            'url_image' => 'required'
        ]);

        $newHeroes = new Hero([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'url_image' => $request->get('url_image'),
        ]);

        $newHeroes->save();

        return response()->json($newHeroes, 200);
    }


    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $heroe = Hero::findOrFail($id);
        return response()->json($heroe, 200);
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
        $heroe = Hero::findOrFail($id);

        $request->validate([
            'title' => 'required', //|max:60',
            'subtitle' => 'required', //'required|max:60',
            'url_image' => 'required'
        ]);

        $heroe->title = $request->get('title');
        $heroe->subtitle = $request->get('subtitle');
        $heroe->url_image = $request->get('url_image');

        $heroe->save();

        return response()->json($heroe, 200);
    }



    /**
     * 
     * Remove the specified hero from the storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $heroe = Hero::findOrFail($id);
        $heroe->delete();

        return response()->json($heroe::all());
    }
}
