<?php

namespace App\repositories;

use App\Models\Post;

class PostRepository implements IPostRepository
{

    public function getAllPosts()
    {

        return Post::orderBy('created_at', 'desc')->get();
    }

    public function createPosts($data)
    {

        return Post::create($data);
    }

    public function updatePosts($id, $data)
    {
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post;
    }

    public function deletePosts($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();

            return true;
        } else {
            return false;
        }
    }
}
