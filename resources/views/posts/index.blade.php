@extends('layouts.master')

@section('content')
    <main role="main">
        <h1>發表文章</h1>
        <form method="post" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="body">內文</label>
                <textarea type="text" class="form-control" id="body" name="body" placeholder="文章內文"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </form>

        @include('layouts.errors')

    </main>
@endsection