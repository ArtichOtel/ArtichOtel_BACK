<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        try {
            auth()->user()->tokens()->delete();

            //Session::flush(); // ?

            return response()->json([
                "message" => 'Token deleted',
                "status" => Response::HTTP_OK
            ]);

        } catch ( \Throwable $err) {
            return response()->json([
               "message" => "Internal error",
               $err,
               "status" => Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }



    }
}
