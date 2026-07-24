<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Service;
use App\Models\ServiceEnquiry;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
    //
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function service()
    {
        return view('website.service');
    }
    
    public function contact ()
    {
        return view('website.contact');
    }


      public function submitServiceEnquiry(Request $request)
    {

        $request->validate([
            'full_name' => 'required|max:100',
            'contact' => 'required|digits:10',
            'email' => 'required|email',
            'service' => 'required',
            'property_type' => 'required',
            'preferred_date' => 'required|date|after_or_equal:today',
            'address' => 'nullable',
            'message' => 'nullable',
        ]);


        ServiceEnquiry::create([
            'full_name' => $request->full_name,
            'contact' => $request->contact,
            'email' => $request->email,
            'service' => $request->service,
            'property_type' => $request->property_type,
            'preferred_date' => $request->preferred_date,
            
            'address' => $request->address,
            'message' => $request->message,
        ]);

        return redirect()->route('service')
            ->with('success', 'Form submitted successfully!');
    }



    public function submitContactEnquiry(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
           
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'username' => $request->username,
            
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('contact')
            ->with('success', 'Form submitted successfully!');
    }



}