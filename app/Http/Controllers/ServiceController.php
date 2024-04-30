<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicedetails;

class ServiceController extends Controller
{
    //
    public function service()
    {
        return view('service');
    }
    
    public function web_app()
    {
        return view('web-app');
    }
    public function mobile_app()
    {
        return view('mobile-app');
    }
    public function ui_ux_design()
    {
        return view('ui_ux_design');
    }
    
    // public function servicedetails($id)
    // {
    //     $details = servicedetails::findOrFail($id);
    //     return view('servicedetails', compact('details'));
    // }


}
