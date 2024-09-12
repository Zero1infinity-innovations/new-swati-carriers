<?php

namespace App\Http\Controllers\backendController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('backend.pages.adminLog');
    }
    public function dashboard(){
        $data['title'] = "Dashboard";
        return view('backend.dashboard', $data);
    }
}
