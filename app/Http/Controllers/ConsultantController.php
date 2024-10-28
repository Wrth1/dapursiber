<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    //

    public function showConsultantPage(){
        return view('consultant');
    }

    public function viewConsultant(){
        // return consultant data
    }

    public function showConsultationRequest(){
        return view('consultation_request');
    }

    public function bookConsultation(){

    }

    public function acceptConsultation(){

    }

}
