<?php

namespace App\Repositories;

interface BloodRepositoryInterface
{
    public function create($data);

    public function update($id, $data);

    public function delete($id);

    public function all();
}