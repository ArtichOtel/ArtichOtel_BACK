<?php

namespace App\Http\Controllers\API\Customer;

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

class CustomerController extends Controller
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
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * Display the specified resource.
     *
     * @param User $customer
     * @return JsonResponse
     */
    public function show(Request $request, User $customer): JsonResponse
    {
        if ($request->user()->cannot('view', $customer)) {
            return response()->json([
                "message" => "You can't view an other Customer, unless you are an Admin."
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json($customer, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return JsonResponse
     */
    public function update(UserCustomerUpdateRequest $request, User $customer): JsonResponse
    {
        if ($request->user()->cannot('update', $customer)) {
            return response()->json([
                "message" => "You can't update an other Customer, unless you are an Admin."
            ], Response::HTTP_UNAUTHORIZED);
        }

        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        $customer->update($validatedData);

        return response()->json($customer, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return JsonResponse
     */
    public function destroy(Request $request, User $customer): JsonResponse
    {
        return response()->json("RTFM", Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
