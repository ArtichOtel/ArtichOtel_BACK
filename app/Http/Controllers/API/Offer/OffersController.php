<?php

namespace App\Http\Controllers\API\Offer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Symfony\Component\HttpFoundation\Response;

class OffersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $offers = Offer::all();

        return response()->json($offers, Response::HTTP_OK);
    }
}
