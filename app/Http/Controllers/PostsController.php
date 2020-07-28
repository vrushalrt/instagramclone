<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        // return view('posts/create');
        return view('posts.create');
    }

    public function store()
    {
    	$data = request()->validate([
    		'caption' => 'required',
    		'image' => ['required','image'],
    	]);

        $imagePath = request('image')->store('uploads/images','public');

    	// Tinker Method
    	// $post = new \App\Post();
    	// $post->caption = $data['caption'];
    	// $post->image = $data['image'];
    	// $post->save();

        auth()->user()->posts()->create($data);

    	// Create Method
    	// \App\Post::create($data);

        // dd(request()->all());
        return redirect('/profile/' . auth()->user()->id);
    }
}
