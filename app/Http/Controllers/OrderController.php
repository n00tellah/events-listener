<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index', [
            'orders' => Order::all(),
        ]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required',
            'item_price' => 'required',
            'item_quantity' => 'required',
            'payment_method' => 'required',
        ]);
        Order::create($request->input());
        return redirect()->route('orders.index');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'item' => 'required',
            'item_price' => 'required',
            'item_quantity' => 'required',
            'payment_method' => 'required',
        ]);
        $order->update($request->input());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
