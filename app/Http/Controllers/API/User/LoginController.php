<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Message\Body;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;
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
                ], Response::HTTP_BAD_REQUEST);
            }

            $user = Auth::user();

            $user->tokens()->delete();

            // get abilities offered by role
            // select abilities from roles inner join users on roles.id = users.role_id where
            $user_id = $user->getAuthIdentifier();

            $abilities = Role::query()
                ->select(['roles.abilities'])
                ->join('users', 'roles.id', '=', 'users.role_id')
                ->where('users.id', '=', $user_id)
                ->get()[0]['abilities'];

            return response()->json([
                'message' => 'User logged in successfully',
                'user_id' => $user_id,
                'token' => $user->createToken('MyApp', $abilities)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'dev' => "bordel de merde",
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
