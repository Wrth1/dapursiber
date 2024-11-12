<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\ChatMessages;
use Illuminate\Http\Request;
use App\Models\Consultations;
use Illuminate\Routing\Controller;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('access')->only('show');
    }

    public function index() {
        // if (Roles::role_is(auth()->user(), 'User')) {
        //     $eid = auth()->user()->id;
        // }
        // else if (Roles::role_is(auth()->user(), 'Consultant')) {
        //     $eid = auth()->user()->id;
        // }
        return view('chat.index', [
            'consultationdatalist' => Consultations::get_consultations_by_id(auth()->user()->id)
        ]);
    }

    public function show($consultationid){

        return view('chat.show', [
            'consultation_id' => $consultationid,
            'consultationdatalist' => Consultations::get_consultations_by_id(auth()->user()->id),
            'consultationdata' => Consultations::get_consultation_data($consultationid),
            'messages' => ChatMessages::get_messages($consultationid)
        ]);
    }

    public function store(Request $request) {

    }
}
