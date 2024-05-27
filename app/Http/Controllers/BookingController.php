<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;


class BookingController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {

        $request->validate([
            'check_in' => 'required|date|after:date',
            'check_out' => 'required|date|after_check_in',
            'name' => 'required|string|max:255',
            'special_request' => 'required|max:255',
            'room' => 'required|integer'
        ]);

        if(Room::isAvailable($request->room, $request->check_in, $request->check_out) !== null) {
            session()->flash('error', 1);
            return view('roomDetails', ['room' => Room::room($request->room), 'rooms' => Room::rooms()]);
        }
        Booking::create($request->all());
        session()->flash('success', 1);
        session()->flash('booking', 1);
        return view('roomDetails', ['room' => Room::room($request->room), 'rooms' => Room::rooms()]);
        
    }
}