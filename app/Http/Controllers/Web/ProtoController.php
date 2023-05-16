<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class ProtoController extends Controller
{
    public function loans() {
        return view('proto.loans');
    }
}
