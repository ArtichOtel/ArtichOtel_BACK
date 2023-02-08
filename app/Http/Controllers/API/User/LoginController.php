<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Role;
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
                    'message' => 'Pseudo or password does not match.',
                ], 400);
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
