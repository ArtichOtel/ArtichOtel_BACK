<?php

namespace App\Http\Controllers\API\Hero;

use App\Models\Hero;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hero\HeroUpdateRequest;
use Symfony\Component\HttpFoundation\Response;




class HeroController extends Controller
{
    /**
     * Display a listing of the resources
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Recup all Heros
        // $heros =  Hero::all();

        // $heros =  DB::table('heroes')
        //     ->join('hero_link', 'heroes.id', '=', 'hero_link.hero_id')
        //     ->join('links', 'hero_link.link_id', '=', 'links.id')
        //     ->select('heroes.*', 'links.*')
        //     ->get();

        $hero =  Hero::query()
            ->select('heroes.*', 'links.url')
            ->join('hero_link', 'heroes.id', '=', 'hero_link.hero_id')
            ->join('links', 'hero_link.link_id', '=', 'links.id')
            ->where('heroes.id', '=', 1)
            // ->groupBy('')
            ->get();


        // Return all information Heros in JSON
        return response()->json($hero, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function store(): JsonResponse
    {
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Display the specified resource.
     * Not implemented
     *
     * @param  int  $id
     * @return JsonResponse
     */
    /*    public function show()
    {
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }*/

    /**
     *  Update the specified resource in storage.
     *
     * @param HeroUpdateRequest $request
     * @param Hero $hero
     * @return JsonResponse
     */
    public function update(HeroUpdateRequest $request, Hero $hero): JsonResponse
    {
        $validateData = $request->validated();
        $hero->update($validateData);

        return response()->json($hero, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     * Not implemented
     *
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
