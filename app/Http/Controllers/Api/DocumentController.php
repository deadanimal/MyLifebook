<?php


namespace App\Http\Controllers\Api;

use App\Models\PersonDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;
use AdrianMejias\Pinecone\Facades\Pinecone;
use Illuminate\Support\Facades\Http;


class DocumentController extends Controller
{



    public function list_documents(Request $request)
    {
        $documents = PersonDocument::where('profile_id', $request->user()->profile->id)->get();

        return [
            'data' => $documents,
            'message' => ''
        ];
    }

    public function detail_document(Request $request)
    {
        $profile_type = $request->user()->profile->profile_type;

        $document = PersonDocument::where([
            ['uuid', '=', $request->uuid],
        ])->first();

        return [
            'data' => $document,
            'message' => ''
        ];
    }

    public function create_document(Request $request)
    {
        $profile_uuid = $request->user()->profile->uuid;
        $profile_id = $request->user()->profile->id;

        $document = PersonDocument::create([
            'uuid' => (string) Str::orderedUuid(),
            'profile_id' => $profile_id,

            'raw' => $request->raw,
            'type' => $request->type,
        ]);

        $response = OpenAI::embeddings()->create([
            'model' => 'text-embedding-ada-002',
            'input' => $request->raw,
        ]);

        $url = 'https://langchain-demo-472d41c.svc.us-west1-gcp-free.pinecone.io/vectors/upsert';
        
        $result = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Api-Key' => env('PINECONE_API_KEY')
        ])->post($url, [
            
                'vectors' => [
                    [
                        'id' =>  Str::orderedUuid() .'.'. Str::orderedUuid(),
                        'values' => $response['data'][0]['embedding']
                    ]
                ],
                'namespace' => 'profile--'.$profile_uuid
            
        ]);


        return [
            'data' => $document,
            'lol'=> $result,
            'message' => ''
        ];

    }

    public function update_document(Request $request)
    {
        $profile_type = $request->user()->profile->profile_type;

        $document = PersonDocument::where([
            ['uuid', '=', $request->uuid],
        ])->first();

        $document->update([]);

        return [
            'data' => $document,
            'message' => ''
        ];
    }

    public function remove_document(Request $request)
    {
        $profile_type = $request->user()->profile->profile_type;

        $document = PersonDocument::where([
            ['uuid', '=', $request->uuid],
        ])->first();

        $document->softDelete();

        return [
            'message' => ''
        ];
    }

    public function update_document_annotations(Request $request)
    {
        $profile_type = $request->user()->profile->profile_type;

        $document = PersonDocument::where([
            ['uuid', '=', $request->uuid],
        ])->first();

        return [
            'data' => $document,
            'message' => ''
        ];
    }
}
