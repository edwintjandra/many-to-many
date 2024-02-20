<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::paginate(4);
        return view('post.index',compact('posts'));
    }

    public function create(){
        $categories=Category::All();
        return view('post.create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $post=Post::create([
            'judul'=>$request->judul,
            'konten'=>$request->konten
        ]);

        $post->categories()->attach($request->categoryId);
        return redirect()->route('home');
    }

    public function show($id){
        $post=Post::find($id);
        $categories=Category::All();
        return view('post.show',compact('post','categories'));
    }

    public function addCategory(Request $request,$id){
        $post=Post::find($id);
        $categories=$post->categories;

        foreach ($categories as $category) {
            if($category->id == $request->categoryId){
                return redirect()->route('home');
            }    
        }

        $post->categories()->attach($request->categoryId);

        return redirect()->route('home');
    }
}
