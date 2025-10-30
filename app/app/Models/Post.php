<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function createPost($data)
    {
        $user_id = 1; // 仮のユーザーID

        $post = new Post();
        $post->user_id = $user_id;
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return $post;
    }

    public function updatePost($data)
    {
        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return $post;
    }
}
