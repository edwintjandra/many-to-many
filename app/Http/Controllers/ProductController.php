<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect()->route('order.index');
    }
}
