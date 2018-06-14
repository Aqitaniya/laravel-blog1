@extends('layouts.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        <div class="body">
            {{ $post->body }}
        </div>
        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="class-block">
                <form method="POST" action="/post/{{$post->id}}/comments">
                    @csrf
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" id="" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection