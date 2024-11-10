<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\Consultations;
use App\Models\User;

class ConsultantController extends Controller
{
    //

    public function showConsultantPage(){
        if(Roles::role_is(auth()->user(), 'User')){
            return view('consultant', [
                'consultantdata' => User::get_consultant()
            ]);
        }
    }

    public function viewConsultant(){
        // return consultant data
    }

    public function showConsultationRequest(){
        return view('consultation_request');
    }

    public function bookConsultation(Request $request){
        $consultation = Consultations::create([
            'user_id' => auth()->user()->id,
            'consultant_id' => $request->consultant_id,
            'date' => now(),
            'status' => 'ongoing',
        ]);
        return redirect()->route('chat');
    }

    public function acceptConsultation(){

    }

}
