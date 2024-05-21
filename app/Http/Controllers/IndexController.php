<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\View\View;


class IndexController extends Controller
{
    //

    public function index() {
        $rooms = Room::swiper();
        $formattedRooms = populateArray($rooms, []);
        return view('index', ['rooms' => $formattedRooms]);
    }
}