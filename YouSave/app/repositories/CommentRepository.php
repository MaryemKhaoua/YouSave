<?php

namespace App\repositories;

use App\Models\Comment;

class CommentRepository implements IcommentRepository
{

    public function getAllComments()
    {
        return Comment::all();
    }

    public function createComments($data)
    {
        return Comment::create($data);
    }



    public function findCommentById($id)
    {
        return Comment::find($id);
    }

    public function updateComments($id, $data)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($data);
        return $comment;
    }

    public function deleteComments($id)
    {
        $comment = Comment::find($id);

        if ($comment) {
            $comment->delete();

            return true;
        } else {
            return false;
        }
    }

}
