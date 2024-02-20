<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $category= Category::create($request->all());

        return redirect()->route('home');
    }
}

