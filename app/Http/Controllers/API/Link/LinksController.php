<?php

namespace App\Http\Controllers\API\Link;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;



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
        $Links =  Link::all();

        // Return all information Links in JSON
        return response()->json($Links, 200);
    }
}
