<?php

namespace App\Http\Controllers\API\User;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginPostRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param LoginPostRequest $request
     * @return JsonResponse
     */
    public function __invoke(LoginPostRequest $request): JsonResponse
    {
        try {
            if (
                !Auth::attempt($request->all(['pseudo', 'password']))
                && !Auth::attempt($request->all(['email', 'password']))
            ) {
                return response()->json([
                    'message' => 'Pseudo or email or password does not match.',
                ], Response::HTTP_BAD_REQUEST);
            }

            $user = Auth::user();

            $user->tokens()->delete();

            // get abilities offered by role
            // select abilities from roles inner join users on roles.id = users.role_id where

            $abilities = Role::query()
                ->select(['roles.abilities'])
                ->join('users', 'roles.id', '=', 'users.role_id')
                ->where('users.id', '=', $user->id)
                ->get()[0]['abilities'];

            $role = Role::query()
                ->select('roles.name')
                ->join('users', 'roles.id', '=', 'users.role_id')
                ->where('users.id', '=', $user->id)
                ->get()[0]['name'];

            $customer_id = null;
            if ($role==='customer') {
                $customer_id = User::query()
                    ->select('*')
                    ->join('customers', 'users.id', '=', 'customers.user_id')
                    ->where('users.id', '=', $user->id)
                    ->first()['id'];
            }


            return response()->json([
                'message' => 'User logged in successfully',
                'user_id' => $user->id,
                'customer_id' => $customer_id,
                'role' => $role,
                'token' => $user->createToken('MyApp', $abilities)->plainTextToken
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json([
                'dev' => "bordel de merde",
                'status' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
