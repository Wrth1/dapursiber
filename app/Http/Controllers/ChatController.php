<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\ChatMessages;
use Illuminate\Http\Request;
use App\Models\Consultations;

class ChatController extends Controller
{
    public function index() {
        if (Roles::role_is(auth()->user(), 'User')) {
            return view('chat.index', [
                'consultationdatalist' => Consultations::get_consultation_list(auth()->user()->id)
            ]);
        }
        else{
            return view('chat.index');
        }
    }

    public function show($consultationid){

        return view('chat.show', [
            'consultation_id' => $consultationid,
            'consultationdatalist' => Consultations::get_consultation_list(auth()->user()->id),
            'consultationdata' => Consultations::get_consultation_data($consultationid),
            'messages' => ChatMessages::get_messages($consultationid)
        ]);
    }

    public function store(Request $request) {

    }
}
