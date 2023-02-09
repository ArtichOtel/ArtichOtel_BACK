<?php

namespace App\Http\Controllers\API\NewInfo;

use App\Http\Controllers\Controller;
use App\Models\NewInfo;
use Symfony\Component\HttpFoundation\Response;

class NewInfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $newInfos = NewInfo::all();

        return response()->json($newInfos, Response::HTTP_OK);
    }
}
