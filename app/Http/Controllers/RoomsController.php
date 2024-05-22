<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\View\View;


class RoomsController extends Controller
{
    //

    public function index() {
        $rooms = Room::rooms();
        return view('index', ['rooms' => $rooms]);
    }

    public function offers() {
        $offerRooms = Room::offers();
        return view('offers', ['rooms' => $offerRooms]);
    }

     public function rooms() {
        $rooms = Room::rooms();
        return view('rooms', ['rooms' => $rooms]);
    }
}