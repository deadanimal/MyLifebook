<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;
use AdrianMejias\Pinecone\Facades\Pinecone;
use Illuminate\Support\Facades\Http;

class AskController extends Controller
{

    public function create_ask(Request $request) {

        $profile_uuid = $request->user()->profile->uuid;
        $profile_id = $request->user()->profile->id;

        $response = OpenAI::embeddings()->create([
            'model' => 'text-embedding-ada-002',
            'input' => $request->raw,
        ]);

        $url = 'https://langchain-demo-472d41c.svc.us-west1-gcp-free.pinecone.io/vectors/query';

        $result = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Api-Key' => env('PINECONE_API_KEY')
        ])->post($url, [
            'topK' => 10,
            'vector' => $response['data'][0]['embedding'],
            'namespace' => 'profile--'.$profile_uuid
            
        ]);        

    }

}
