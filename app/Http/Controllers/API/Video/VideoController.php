<?php

namespace App\Http\Controllers\API\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $videos = Video::all();

        return response()->json($videos, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */
    public function store(): JsonResponse
    {
        return response()->json('RTFM', 405);
    }

    /**
     * Display the specified resource.
     *
     * @param Video $video
     * @return JsonResponse
     */
    public function show(Video $video): JsonResponse
    {
        return response()->json($video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Video $video
     * @return JsonResponse
     */
    public function update(Request $request, Video $video): JsonResponse
    {
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|max:300',
            'url_video' => 'required|max:255',
        ]);

        $video->title = $request->get('title');
        $video->description = $request->get('description');
        $video->url_video = $request->get('url_video');

        $video->save();

        return response()->json($video);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        return response()->json('RTFM', 405);
    }
}
