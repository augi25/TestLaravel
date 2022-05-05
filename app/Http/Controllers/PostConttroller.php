<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostConttroller extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('title', 'asc')->get();
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Posts::findOrFail($id);

        return view('show', compact('post'));
    }
    public function delete($id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();

        return redirect('/');
    }

    public function store(Request $request)
    {
        Posts::create($request->all());
        return redirect('/');
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('create');
    }
}
