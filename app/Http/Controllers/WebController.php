<?php

namespace App\Http\Controllers;

use App\Mail\ContactWebEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller{
    
    public function index(){       
        return view('web.index');
    }

}
