<?php
/**
 * Created by PhpStorm.
 * User: nbas059
 * Date: 2018/5/24
 * Time: 上午10:48
 */

namespace App\Repositories;


use App\Post;

class PostRepository
{
    public function getAllPosts()
    {
        return Post::latest()->get();
    }
}