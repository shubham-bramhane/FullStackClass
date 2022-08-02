<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }


    public function service(){
        return view('service');
    }


    public function show()
    {
        return view('show');
    }


    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
