<?php

namespace App\Http\Controllers\API\Advantage;

use App\Http\Controllers\Controller;
use App\Models\Advantage;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $advantages = Advantage::all();

        return response()->json($advantages, 200);
    }
}