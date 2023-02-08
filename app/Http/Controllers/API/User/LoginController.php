<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Message\Body;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        try {
            $validateUser = Validator::make($request->all(), [
                'pseudo' => 'required',
                'password' => 'required'
            ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 400);
            }

            if (!Auth::attempt($request->only(['pseudo', 'password']))) {
                return response()->json([
                    'message' => 'Pseudo & password does not match.',
                ], 400);
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
