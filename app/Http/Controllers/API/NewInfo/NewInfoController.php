<?php

namespace App\Http\Controllers\API\NewInfo;

use App\Http\Controllers\Controller;
use App\Models\NewInfo;
use Illuminate\Http\Request;

class NewInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Not implemented
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json("RTFM", 405);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:60', 'alpha_num:ascii'],
            'description' => ['required', 'max:300', 'alpha_num:ascii'],
            'url_image' => ['required', 'max:255', 'url'],
            'order' => ['required', 'numeric;integer']
        ]);

        $newNewInfo = new NewInfo([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'url_image' => $request->get('url_image'),
            'order' => $request->get('order'),
        ]);

        $newNewInfo->save();

        return response()->json($newNewInfo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $newInfo = NewInfo::findOrFail($id);

        return response()->json($newInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $newInfo = NewInfo::findOrFail($id);

        $request->validate([
            'title' => ['max:60', 'alpha_num:ascii'],
            'description' => ['max:300', 'alpha_num:ascii'],
            'url_image' => ['max:255', 'url'],
            'order' => ['numeric;integer']
        ]);

        $newInfo->title = $request->get('title');
        $newInfo->description = $request->get('description');
        $newInfo->url_image = $request->get('url_image');
        $newInfo->order = $request->get('order');

        $newInfo->save();

        return response()->json($newInfo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $newInfo = NewInfo::findOrFail($id);

        $newInfo->delete();

        return response()->json(NewInfo::all());
    }
}
