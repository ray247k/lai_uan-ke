<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(\request(), [
           'body' => 'required'
        ]);

        $repository = new PostRepository();
        $repository->addPost(\request('body'));
        return back();
    }
}
