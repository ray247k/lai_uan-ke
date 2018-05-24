<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\PostRepository;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = \request()->get('username');

        $repository = new PostRepository();
        $posts = $repository->getAllPosts();
        return view('posts.index', compact('posts', 'username'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $this->validate(\request(), [
           'body' => 'required'
        ]);

        $post->addPost(\request('body'));
        return back();
    }
}
