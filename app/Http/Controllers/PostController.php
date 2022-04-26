<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption'   => 'required',
            'image'     => ['required', 'image'],
        ]);

        $imgPath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path('storage/' . $imgPath))->fit(600, 600);
        $image->save();

        auth()->user()->posts()->create([
            'caption'   => $data['caption'],
            'image'     => $imgPath
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Models\Post $post) {
        return view('posts.show', compact('post'));
    }
}
