<?php

namespace App\repositories;

interface IcommentRepository
{

    public function getAllComments();
    public function createComments($data);
    public function findCommentById($id);
    public function updateComments($id, $data);
    public function deleteComments($id);
}
