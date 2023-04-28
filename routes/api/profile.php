<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::post('/tokens', function (Request $request) {

    $user = User::where('email', $request->email)->first();
 
    if ($user &&
        Hash::check($request->password, $user->password)) {
        $token = $user->createToken($user->id);
        $data = [
            'token' => $token->plainTextToken,
            'userId' => $user->uuid,
            'profile' => $user->profile
        ];
        return $data;
    } else {
        return ['error' => 'Invalid email and password combination'];        
    }

});



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', [ProfileController::class, 'view_self_profile']);   
    Route::put('/profile', [ProfileController::class, 'update_self_profile']);   

    // Route::get('/profiles', [ProfileController::class, 'list_profiles']);
    // Route::get('/profiles/{profile_id}', [ProfileController::class, 'detail_profile']);
    // Route::post('/profiles', [ProfileController::class, 'create_profile']);
    // Route::put('/profiles/{profile_id}', [ProfileController::class, 'update_profile']);

    Route::get('/billing', [ProfileController::class, 'billing']);

    Route::delete('/tokens', function (Request $request) {
        $user = $request->user();
        $user->tokens()->delete();
        return ['message' => 'All previous tokens deleted.'];        
    });    


});
