<div class="blog-post">
    <h2>{{ $post->body }}</h2>
    <p class="blog-post-meta">
        {{ $post->created_at->toDateTimeString() }}
    </p>
</div>