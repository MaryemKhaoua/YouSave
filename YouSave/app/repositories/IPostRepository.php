<?php

namespace App\repositories;

interface IPostRepository {

    public function getAllPosts();
    public function createPosts($data);
    public function updatePosts($id, $data);
    public function deletePosts($id);
}


?>