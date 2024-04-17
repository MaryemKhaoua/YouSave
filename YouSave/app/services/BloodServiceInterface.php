<?php

namespace App\Services;

interface BloodServiceInterface
{
    public function createBlood($data);

    public function updateBlood($id, $data);

    public function deleteBlood($id);

    public function getBlood($id);

    public function getAllBlood();
}