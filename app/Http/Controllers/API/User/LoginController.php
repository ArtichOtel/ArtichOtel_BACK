<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use http\Message\Body;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {

        $data = $request.Body::class;

        // wait for a valid payload
        return response()->json($data, 222); // lucky status
    }
}
