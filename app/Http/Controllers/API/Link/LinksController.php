<?php

namespace App\Http\Controllers\API\Link;

use App\Models\Link;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;



class LinksController extends Controller
{
    /**
     * Display a listing of the resources
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        // Recup all Links
        $links =  Link::all();

        // Return all information Links in JSON
        return response()->json($links, Response::HTTP_OK);
    }
}
