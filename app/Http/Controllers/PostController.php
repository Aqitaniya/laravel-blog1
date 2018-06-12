<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){

        return view('posts.show');
    }
    public function create(){

        return view('posts.create');
    }
    public function store(){
//        dd(request()->all('title'));
//        dd(request()->all(['title', 'body']));
//        dd(request()->all());
        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
//        // Save it to database
//        $post->save();
        /////////////////
//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);
        /////////////////
//        Post::create(request()->all());
        /////////////////
        Post::create(request()->all(['title', 'body' ]));
        return redirect('/posts');
        // Create a new post using the request data
        // Save it to the database
        // And then redirect to the home page.

    }
}
