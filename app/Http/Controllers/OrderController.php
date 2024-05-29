<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Order;

use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'user_id' => 'integer|required',
            'room_id' => 'integer|required',
            'type' => 'string|required',
            'description' => 'string|required'
        ]);

        Order::create($request->all());
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
