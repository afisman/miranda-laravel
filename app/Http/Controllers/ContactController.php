<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        session()->flash('success', 1);
        session()->flash('message', 1);
        return view('contact');
    }
}