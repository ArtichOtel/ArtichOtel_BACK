<?php

namespace App\Http\Controllers\API\User;

use App\Http\Requests\User\UserCustomerUpdateRequest;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Notifications\RegisterLogin;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\User\UserCustomerPostRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
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
            'pseudo' => isset($validatedData['pseudo']) ? $validatedData['pseudo'] : $pseudo,
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

        $user['password'] = $validatedData['password'];
        $user->notify(new RegisterLogin());

        return response()->json([$user, $customer], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(Request $request, User $user): JsonResponse
    {
        if ($request->user()->cannot('view', $user)) {
            return response()->json([
                "message" => "You can't view an other User, unless you are an Admin."
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json($user, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return JsonResponse
     */
    public function update(UserCustomerUpdateRequest $request, User $user): JsonResponse
    {
        if ($request->user()->cannot('update', $user)) {
            return response()->json([
                "message" => "You can't update an other User, unless you are an Admin."
            ], Response::HTTP_UNAUTHORIZED);
        }

        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user->update($validatedData);

        return response()->json($user, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    public function destroy(Request $request, User $user): JsonResponse
    {
        if ($request->user()->cannot('delete', $user)) {
            return response()->json([
                "message" => "You can't delete an other User, unless you are an Admin."
            ], Response::HTTP_UNAUTHORIZED);
        }

        // User anonymization //
        $user->update([
            'email' => "anonymous{$user->id}@anonymous.com",
            'pseudo' => "anonymous{$user->id}",
            'password' => Hash::make(Str::random()),
        ]);

        if ($user->role_id !== 1) { // Check if not Admin
            // Customer anonymization
            $customer = Customer::find($user->id);
            $customer->update([
                'first_name' => "Anonymous",
                'last_name' => "Anonymous",
                'phone_number' => "anonymous",
                'avatar_url' => null
            ]);
            // Customer's addresses anonymization
            $addresses = Address::query()
                ->select(['addresses.*'])
                ->where('addresses.customers_id', '=', $user->id)
                ->get();
            if (count($addresses) !== 0) {
                foreach ($addresses as $addresse) {
                    Address::find($addresse->id)
                        ->update([
                            'address' => 'anonymous'
                        ]);
                }
            }
        }

        return response()->json([
            "message" => "User perfetcly deleted."
        ], Response::HTTP_OK);
    }
}
