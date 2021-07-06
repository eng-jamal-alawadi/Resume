<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resumeController extends Controller
{

    public function home(){
        return view('layout.master');
    }
    public function about(){
        return view('about');
    }
    public function experience(){
        return view('experience');
    }
    public function education(){
        return view('education');
    }
    public function skills(){
        return view('skills');
    }
    public function interests(){
        return view('interests');
    }
    public function certifications(){
        return view('certifications');
    }


}
