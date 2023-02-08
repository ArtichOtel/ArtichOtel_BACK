<?php

namespace App\Http\Controllers\API\Section;

use App\Models\Section;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class SectionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $section = Section::all();

        return response()->json($section, Response::HTTP_OK);
    }
}
