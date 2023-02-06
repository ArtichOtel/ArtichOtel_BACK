<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use http\Message\Body;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::attempt(['pseudo' => $request->pseudo, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['pseudo'] = $user->pseudo;

            return response()->json($success, 200);
        } else {
            return response()->json('Unauthorized', 401);
        }


        // $data = $request.Body::class;

        // // wait for a valid payload
        // return response()->json($data, 222); // lucky status
    }
}
