<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceEnquiry;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Show the form
    public function index()
    {
        $services = ServiceEnquiry::latest()->paginate(10);
        return view('admin.service.all', compact('services')); // Change to your Blade file
    }

    // Save the form data


   



    public function destroy($id)
    {
        $service = ServiceEnquiry::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}