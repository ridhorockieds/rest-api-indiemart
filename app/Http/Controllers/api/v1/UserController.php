<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8'

        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => $validated->errors()
            ], 401);
        } else {
            $user = User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            if ($user) {
                return response()->json([
                    'message' => 'Registration succes',
                ], 201);
            } else {
                return response()->json([
                    'message' => 'Registration failed'
                ], 401);
            }
        }
    }

    public function signin(Request $request)
    {
        $validation = Validator::make($request->all(), [
            // 'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        if ($validation->fails()) {
            return response()->json([
                'message' => $validation->errors(),
            ], 400);
        } else {
            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'Username or Password not match!',
                ], 401);
            } else {
                $token = $user->createToken('token')->plainTextToken;
                return response()->json([
                    'message' => 'Login succes',
                    'token' => $token
                ], 200);
            }
        }
    }

    public function signout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
