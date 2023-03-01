<?php

namespace App\Http\Controllers\API\User;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Notifications\RegisterLogin;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\User\UserCustomerPostRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // list of users
        $users = User::all();

        return response()->json($users, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return JsonResponse
     */
    public function store(UserCustomerPostRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $pseudo = ucfirst($validatedData['first_name']) . ucfirst($validatedData['last_name']);
        $role_id = 2;
        $user = new User([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'pseudo' => $validatedData['pseudo'] ?: $pseudo,
            'role_id' => $role_id,
        ]);

        $user->save();

        $customer = new Customer(
            [
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'lang' => $validatedData['lang'],
                'user_id' => $user->id,
            ]
        );
        $customer->save();
        $user->notify(new RegisterLogin());
        return response()->json([$user, $customer], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        return response()->json($user, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
        // user to update SPRINT 2
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        // user to delete SPRINT 2
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
