<?php

namespace App\Http\Controllers;

use DB;
use Throwable;
use App\Mail\ContactUs;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http; 
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }

    public function addcontact(Request $request)
    { 
         #validation
         $mailData = $request->validate([
            'name'               => 'required|string|max:255',
            'email'              => 'required|email|regex:/(.*)@gmail\.com/i',
            'phonenumber'        => 'required|digits:10|regex:/^([0-9\s\-\+\(\)]*)$/',
            'subject'            => 'required|string|max:255',
            'message'            => 'required|string|max:255',
        ]);

        try{
            
            #store data in database
            $contactus = new contact();
            $contactus->contact_name = $request->name;
            $contactus->contact_email = $request->email; 
            $contactus->contact_phonenumber = $request->phonenumber; 
            $contactus->contact_subject = $request->subject;
            $contactus->contact_message = $request->message;
            // $token = $request->input('g-racaptcha-response');
            // dd($token);
        

            // Send email
            Mail::to('drashtiv2392002@gmail.com')->send(new ContactUs($mailData));

            // Send email to admin
            // Mail::send('drashtiv2392002@gmail.com')->to(new ContactUs($mailData));

            // Send email to admin with user's email as "from"
            // Mail::send(new ContactUs($mailData), [], function($message) use ($mailData) {
            // 	$message->from($mailData['email'], $mailData['name']); // Set user's email and name as "from"
            // 	$message->to('drashtiv2392002@gmail.com'); // Set the recipient's email address here
            // });


            // Send confirmation email to user
            Mail::to($request->email)->send(new ContactUs([
                'subject' => 'Thank you for contacting us!',
                'name' => env('MAIL_FROM_NAME'),  // Set your website or company name here
                'email' => 'drashtiv2392002@gmail.com', // Set your email address here
                'message' => 'We have received your message and will get back to you soon.'
            ])); 

            $contactus->save();
            \DB::commit();
            return redirect()->back()->with("success","We have received your message and would like to thank you for writing to us.!");

        } catch (Throwable $e) {   
            dd($e->getMessage()); // Debugging statement 
            return redirect()->back()->with("danger","Something Went Wrong!!");
        }
    }
}
