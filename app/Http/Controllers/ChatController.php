<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index() {
        return view('chat');
    }
    public function show($consultationid){

        return view('chatid', [
            'consultation_id' => $consultationid
        ]);
    }
}
