<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index");
    }

    public function about(){
        return view("frontend.pages.about");
    }

    public function services(){
        return view("frontend.pages.services");
    }
}
