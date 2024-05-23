<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store() {
        $contact = new Contact();
        $contact->full_name = request("name");
        $contact->email = request("email");
        $contact->phone = request("phone");
        $contact->subject = request("subject");
        $contact->message = request("message");
        

        echo date("Y/m/d");

        $contact-> save();

        return redirect('/contact')->with('contact', true);
    }
}