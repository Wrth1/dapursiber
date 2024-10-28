<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index() {
        return view('chat.index');
    }

    public function show($consultationid){

        return view('chat.show', [
            'consultation_id' => $consultationid
        ]);
    }

    public function store(Request $request) {

    }
}
