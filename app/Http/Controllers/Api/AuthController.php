<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;


class AuthController extends Controller
{

    public function register(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->nam,
            'email' => $request->emai,
            'password' => Hash::make($request->password),
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
        ]);

        $user
            ->newSubscription('prod_N3Kx5RISCPvNCg', 'price_1MJEHqL56wwkJgEVb4KLIZFQ')
            ->trialDays(14)
            ->create();

        $data = [
            'userId' => $user->uuid,
            'profileId' => $profile->uuid
        ];

        return $data;
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            //'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (
            $user &&
            Hash::check($request->password, $user->password)
        ) {
            $token = $user->createToken($request->device_name);
            $data = [
                'token' => $token->plainTextToken,
                'userId' => $user->uuid,
                'profileId' => $user->profile->uuid,
                'name' => 'name',
                'username' => 'username',
                'email' => $user->email
            ];
            return $data;
        } else {
            return ['error' => 'Invalid email and password combination'];
        }
    }

    public function logout(Request $request)
    {

        $user = $request->user();
        $user->tokens()->delete();
        return [
            'status' => 'OK',
            'message' => 'All previous tokens deleted.'
        ];
    }
}
