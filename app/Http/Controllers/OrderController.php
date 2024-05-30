<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::rooms();
        $orders = Order::orders();
        $types = ['Food', 'Other'];
        return view('orders', ['orders' => $orders, 'rooms'=>$rooms, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'integer|required',
            'room_id' => 'integer|required',
            'type' => 'string|required',
            'description' => 'string|required'
        ]);

        Order::create($request->all());
        return Redirect::route('dashboard');    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        echo $request->id;
        $order = Order::find($request->id);
        print_r($order);
        $request->validate([
            'type' => 'string|required',
            'description' => 'string|required|max:255'
        ]);
        $order->description = $request->description;
        $order->type = $request->type;
        $order->save();

        return Redirect::route('dashboard'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $order = Order::find($request->id);
        $order->delete();

        return Redirect::route('dashboard'); 

    }
}
