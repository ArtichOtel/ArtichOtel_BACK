<?php

namespace App\Http\Controllers\API\Hero;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\JsonResponse;
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
        $heros =  Hero::all();

        // Return all information Heros in JSON
        return response()->json($heros, 200);
    }


    /**
     *  Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        $request->validate([
            'title' => 'required', //|max:60',
            'subtitle' => 'required', //'required|max:60',
            'url_image' => 'required'
        ]);

        $hero->title = $request->get('title');
        $hero->subtitle = $request->get('subtitle');
        $hero->url_image = $request->get('url_image');

        $hero->save();

        return response()->json($hero, 200);
    }


}


/**
 * Display a listing of the resources
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\JsonResponse
 */
// public function store(Request $request)
// {
//     $request->validate([
//         'title' => 'required',
//         'subtitle' => 'required',
//         'url_image' => 'required'
//     ]);

//     $newHeroes = new Hero([
//         'title' => $request->get('title'),
//         'subtitle' => $request->get('subtitle'),
//         'url_image' => $request->get('url_image'),
//     ]);

//     $newHeroes->save();

//     return response()->json($newHeroes, 200);
// }


/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\JsonResponse
 */
// public function show($id)
// {
//     $heroe = Hero::findOrFail($id);
//     return response()->json($heroe, 200);
// }


/**
 *
 * Remove the specified hero from the storage.
 *
 * @param int $id
 * @return \Illuminate\Http\JsonResponse
 */
// public function destroy($id)
// {
//     $hero = Hero::findOrFail($id);
//     $hero->delete();

//     return response()->json($hero::all());
// }
