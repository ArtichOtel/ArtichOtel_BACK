<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginPostRequest;
// use App\Models\User;
// use http\Message\Body;
// use Illuminate\Http\Request;
// use PHPUnit\Util\Json;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(LoginPostRequest $request)
    {
        try {
            if (!Auth::attempt($request->only(['pseudo', 'password']))) {
                return response()->json([
                    'message' => 'Pseudo or password does not match.',
                ], Response::HTTP_UNAUTHORIZED);
            }

            $user = Auth::user();

            $user->tokens()->delete();

            return response()->json([
                'message' => 'User logged in successfully',
                'token' => $user->createToken('MyApp')->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
