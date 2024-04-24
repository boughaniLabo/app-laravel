<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //get the current auth user
    public function getCurrentUser(Request $request)
    {

        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }
        return response()->json($user, 200);
    }
    //
    public function updateUser(Request $request)
    {
        $userId = $request->id;

        if (!$userId) {
            return response()->json([
                'message' => 'user id is required.',
            ], 400);
        }

        try {
            $user = User::find($userId);

            if (!$user) {
                return response()->json([
                    'message' => 'User not found',
                ], 404);
            }
            $validateUser = Validator::make(
                $request->all(),
                [
                    "firstName" => ["required", "min:3", "max:20"],
                    "lastName" => ["required", "min:3", "max:20"],
                    "email" => ["required", "email", Rule::unique('users')->ignore($user->id)],
                    "role" => ["required", "min:3"],
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 400);
            }
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'user' => $user
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }

    public function deleteUser($id,Request $request)
    {
        $userId = $id;

        if (!$userId) {
            return response()->json([
                'message' => 'user id is required.',
            ], 400);
        }

        try {
            $user = User::find($userId);

            if (!$user) {
                return response()->json([
                    'message' => 'User not found',
                ], 404);
            }

            $user->delete();

            return response()->json([
                'status' => true,
                'message' => 'User Deleted Successfully',
                'user' => $user
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getAllUser()
    {
        try {
            $users = User::all();
            return response()->json([
                'status' => true,
                'message' => 'list of users',
                'users' => $users
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }
}