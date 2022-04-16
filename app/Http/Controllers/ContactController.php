<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',

        ]);
        /*
                $contact = [
                    'phone' => $request->name,
                    'email' => $request->email,
                    'address' => $request->subject,

                ];*/
        $contact = new Contact();
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->save();
        $notification = array(
            'message' => 'contact Created',
            'alert-type' => 'success'
        );

        return back()->with($notification);
//	     Mail::to($request->email)->send(new ContactMail($contact));
//
//	    return "Thanks for message me.";
    }
}
