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

    public function roomsList() {
        $checkIn = isset($_GET['arrival']) ? $_GET['arrival'] : null;
        $checkOut = isset($_GET['departure']) ? $_GET['departure'] : null;
        $rooms = Room::checkAvailability($checkIn, $checkOut);
        return view('roomsList', ['rooms' => $rooms]);
    }

    public function roomDetails(Room $room) {
        $formattedRoom = Room::formatRoom($room);
        $rooms = Room::rooms();
        return view('roomDetails', ['room' => $formattedRoom, 'rooms' => $rooms]);
    }
}