<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostsController extends Controller
{

    public function index() 
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }   

    public function create() 
    {
        return view('posts.create');
    }

    public function store(Request $request) 
    {
        $newPost = new Post;
        $newPost->user_id = 1;
        $newPost->title = $request->input('title');
        $newPost->body = $request->input('body');
        $newPost->save();
        return $this->index();
    }

    public function show($id) 
    {
        $post = Post::find($id);
        return view('posts.view')->with('post', $post);
    }
}
