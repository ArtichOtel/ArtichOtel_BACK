<?php

namespace App\Http\Controllers\API\Section;

use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SectionController extends Controller
{
    /**
     * It returns a JSON response of all the sections in the database
     *
     * @return JsonResponse containing all the sections in the database.
     */
    public function __invoke(): JsonResponse
    {
        $section = Section::all();

        return response()->json($section, Response::HTTP_OK);
    }
}
