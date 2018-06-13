<div class="blog-post">
    <a href="/post/{{ $post->id }}" >
        {{ $post->title }}
    </a>
    <h6>id: {{$post->id}}</h6>
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    {{--laravel carbon - lib for date formatting--}}
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
    {{$post->body}}
</div><!-- /.blog-post -->