<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\Email;
use App\Models\ns_Contact;
use App\Models\ns_FeedBack;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $feedbacks = $this->GetFeedback();
        return view("index", compact('feedbacks'));
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
            'ipAddress' => request()->ip(),
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

    public function contact(){
        return view("frontend.pages.contact");
    }

    public function contactStore(Request $request){



        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric',
            'feedback' => 'required|string',
        ]);
        
        $data = $request->request;

        try {
            // store in database
            $contactMesssage = ns_Contact::create([
                'name' => $data->get('name'),
                'email' => $data->get('email'),
                'number' => $data->get('number'),
                'message' => $data->get('feedback'),
                'ip_address' => request()->ip() ?? '',
            ]);
    
            // Prepare the data for the email
            $emailData = [
                'name' => $data->get('name'),
                'email' => $data->get('email'),
               'number' => $data->get('number'),
               'message' => $data->get('feedback'),
            ];
    
            // Send the email
            $title = "New Contact Request from New Swati Carriers";
            $admin = "admin";
    
            Mail::to(env("ADMIN_EMAIL"))->send(new ContactMail($emailData, $title, $admin));
    
            // Redirect with a success message
            return redirect()->back()->with('success', 'Your Details have been successfully sent to New Swati Carriers Teams.');
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }

    public function GetFeedback(){
        $feedBack = DB::table('ns__feed_backs')->get();
        return $feedBack;
    }
}
