<div class="blog-post">
    <h2>{{ $post->body }}</h2>
    <p class="blog-post-meta">
        作者 {{ $post->username }}
        發表時間 {{ $post->created_at->toDateTimeString() }}
    </p>
</div>