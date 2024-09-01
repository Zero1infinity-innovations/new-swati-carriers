<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\Email;
use App\Models\ns_FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        
        $feedbackMessage = ns_FeedBack::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'feedback' => $validatedData['feedback'],
        ]);

        // Prepare the data for the email
        $data = [
            'name' => $feedbackMessage->name,
        ];


        // Send the email
        $title = "Feedback for New Swati Carriers";
        $customer = "customer";
        $admin = "admin";

        Mail::to($request->get("email"))->send(new Email($data, $title, $customer));
        Mail::to(env("ADMIN_EMAIL"))->send(new Email($data, $title, $admin));

        // Redirect with a success message
        return redirect()->back()->with('success', 'Your feedback has been submitted successfully.');
        

    }
}
