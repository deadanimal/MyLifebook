<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransformerController extends Controller
{
    private function auto_audio_to_text($url) {
        // $file = download($url);
        // pass to API
        // get the text and store within weviate
        //
    }

    private function auto_video_to_text($url) {}

    private function manual_audio_to_text() {}

    private function manual_video_to_text() {}
}
