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
        $data['breadcrumbs'] =[];
        $data['breadcrumbs'][] = [
            'text'=>'Dashboard',
            'url'=>route('admin.dashboard')
        ];
        $data['title'] = "Dashboard";
        return view('backend.dashboard', $data);
    }

    public function services(){
        $data['breadcrumbs'] =[];
        $data['breadcrumbs'][] = [
            'text'=>'Dashboard',
            'url'=>route('admin.dashboard')
        ];
        $data['breadcrumbs'][] = [
            'text'=>'Services',
            'url'=>route('admin.services')
        ];
        $data['title'] = "Services";
        return view('backend.pages.services', $data);
    }
}
