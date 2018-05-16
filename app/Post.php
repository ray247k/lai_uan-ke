<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function addPost()
    {
        $post = new Post;
        $post->body = request('body');
        $post->save();
    }
}
