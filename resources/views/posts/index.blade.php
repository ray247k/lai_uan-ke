@extends('layouts.master')

@section('content')
    <main role="main">
        <form method="post" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="body">發表文章</label>
                <textarea type="text" class="form-control" id="body" name="body" placeholder="文章內文"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </form>

        @include('layouts.errors')

        {{-- 文章內容區域--}}
        @if( count($posts))
            <ol>
                @foreach($posts as $post)
                    <li class="blog-post">
                        <h2>{{ $post->body }}</h2>
                        <p class="blog-post-meta">
                            作者 {{ $post->username }}
                            發表時間 {{ $post->created_at->toDateTimeString() }}
                        </p>
                    </li>
                @endforeach
            </ol>
        @else
            <h2>目前尚無文章，快來搶頭香</h2>
        @endif
    </main>
@endsection