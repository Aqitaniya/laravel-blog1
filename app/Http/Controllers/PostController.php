<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
//        $posts = Post::latest()->get(); //sort by date publish
        $posts = Post::orderBy('created_at', 'desc')->get(); //sort by date publish
//        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
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
        $this->validate(request(),[
           'title' => 'required',
           'body' => 'required',
        ]);
//        Post::create(request()->all(['title', 'body' ]));
        Post::create(request(['title', 'body']));
        return redirect('/posts');
        // Create a new post using the request data
        // Save it to the database
        // And then redirect to the home page.

    }
}
