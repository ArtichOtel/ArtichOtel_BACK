<?php

namespace App\Http\Controllers\API\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\VideoUpdateRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
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
     * @param VideoUpdateRequest $request The request object.
     * @param Video $video The model that we're updating.
     * 
     * @return JsonResponse that was updated.
     */
    public function update(VideoUpdateRequest $request, Video $video): JsonResponse
    {
        $validatedData = $request->validated();
        $video->update($validatedData);

        return response()->json($video, Response::HTTP_OK);
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
