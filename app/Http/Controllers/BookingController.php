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
        $booking = new Booking();
        $booking->name = request("name");
        $booking->order_date = date("Y-m-d H:i:s");
        $booking->check_in = date("Y-m-d",substr(strtotime(request("arrival")), 0, 10));
        $booking->check_out = date("Y-m-d",substr(strtotime(request("departure")), 0, 10));
        $booking->hour_check_in = "12:00";
        $booking->hour_check_out = "11:00";
        $booking->hour_check_in = "12:00";
        $booking->discount = 0;
        $booking->special_request = request("special_request");
        $booking->status = "Check In";
        $booking->room =request('id');

        $booking-> save();

        return redirect('/rooms')->with('message', true);
        
    }
}