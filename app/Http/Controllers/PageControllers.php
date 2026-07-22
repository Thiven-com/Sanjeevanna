<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
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
}