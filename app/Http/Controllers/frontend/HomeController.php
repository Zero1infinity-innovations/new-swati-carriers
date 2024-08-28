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

    public function feedback(){
        return view("frontend.pages.feedback");
    }

    public function feedbackStore(Request $request){
        $data = $request->all();
        $data["name"] = $request->get("name");
        $data["email"] = $request->get("email");
        $data["message"] = $request->get("message");
        
    }
}
