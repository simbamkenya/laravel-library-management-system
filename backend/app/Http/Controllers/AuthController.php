<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $inputs = $request->only(['email', 'password']);
        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'response_code' => 400,
                'error_description' => 'request body validation error',
                'APIerror' => $validator->messages()
            ]);
        }

        // $user = User::where('email', $request->email)->first();
        //!$user || !Hash::check($request->password, $user->password)
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response([
                'success' => false,
                'message' => 'Please ensure you have entered correct email and password',
            ]);
        }

        return response()->json(['success' => true, 'data' => "auth success"]);
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ];
        $inputs = $request->all();
        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'response_code' => 400,
                'error_description' => 'request body validation error',
                'APIerror' => $validator->messages()
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }

    public function reset(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'token' => 'required'
        ];

        $inputs = $request->only(['email', 'password', 'token']);

        $validator = Validator::make($inputs, $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'response_code' => 400,
                'error_description' => 'request body validation error',
                'APIerror' => $validator->messages()
            ]);
        }
        $user = User::where('email', $request->email)->first();
        return response()->json(['success' => true, 'user' => $user]);
    }
}
