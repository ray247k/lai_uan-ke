<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function addPost()
    {
        $username = \request()->get('username');

        $post = new Post;
        $post->body = request('body');
        $post->username = $username;
        $post->save();
    }
}
