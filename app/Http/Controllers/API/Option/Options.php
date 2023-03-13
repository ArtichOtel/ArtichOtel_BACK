<?php

namespace App\Http\Controllers\API\Option;

use App\Models\Optional_service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;


class Options extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(): JsonResponse
    {
        $options = Optional_service::all();

        return response()->json($options, Response::HTTP_OK);
    }
}
