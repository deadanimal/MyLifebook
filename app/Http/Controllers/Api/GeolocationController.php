<?php

namespace App\Http\Controllers\Api;

use App\Models\PersonGeolocation;
use Illuminate\Http\Request;

class GeolocationController extends Controller
{
    public function create_geolocation(Request $request) {
        $profile_id = $request->user()->profile->id;

        $geolocation = PersonGeolocation::create([
            'profile_id' => $profile_id
        ]);

        return [
            'data' => $geolocation,
            'message' => ''
        ];
    }
}
