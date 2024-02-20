<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index(){
        $orders=Order::All();
        return view('order.index',compact('orders'));
    }

    public function  create(){
        return view('order.create');
    }

    public function store(Request $request){
        Order::create($request->all());
        return redirect()->route('order.index');
    }

    public function show(Request $request,$id){
        $order=Order::find($id);
        return view('order.show',compact('order'));
    }

    public function addProduct(Request $request){
         $order=Order::find($request->orderId);
        $order->products()->attach($request->produkId);

        return redirect()->route('order.index');
    }
}
