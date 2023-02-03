<?php

namespace App\Http\Controllers\API\Section;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return response()->json($section, 200);
    }
}
