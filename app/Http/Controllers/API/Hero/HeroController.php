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
     * Store a newly created resource in storage.
     * Not implemented
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        return response()->json("RTFM", 405);
    }

    /**
     * Display the specified resource.
     * Not implemented
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id) {
        return response()->json("RTFM", 405);
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
            'title' => ['required', 'max:60', 'alpha_num:ascii'],
            'subtitle' => ['max:60', 'alpha_num:ascii'],
            'url_image' => ['required', 'url']
        ]);

        $hero->title = $request->get('title');
        $hero->subtitle = $request->get('subtitle');
        $hero->url_image = $request->get('url_image');

        $hero->save();

        return response()->json($hero, 200);
    }

    /**
     * Remove the specified resource from storage.
     * Not implemented
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id) {
        return response()->json("RTFM", 405);
    }

}