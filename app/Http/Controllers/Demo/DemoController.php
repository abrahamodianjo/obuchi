<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function HomeMain(){
        return view('frontend.index');

    }// End Home method

    public function Index(){
        return view('about');

    }// end method

    public function ContactMethod(){
        return view ('contact');
    } // end method
}
