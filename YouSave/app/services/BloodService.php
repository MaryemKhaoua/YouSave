<?php

namespace App\Services;

use App\Models\BloodType;
use App\Repositories\BloodRepositoryInterface;

class BloodService implements BloodServiceInterface
{
    protected $bloodRepository;

    public function __construct(BloodRepositoryInterface $bloodRepository)
    {
        $this->bloodRepository = $bloodRepository;
    }

    public function createBlood($data)
    {
        return $this->bloodRepository->create($data);
    }

    public function updateBlood($id, $data)
    {
        return $this->bloodRepository->update($id, $data);
    }

    public function deleteBlood($id)
    {
        return $this->bloodRepository->delete($id);
    }

    public function getBlood($id)
    {
        return $this->bloodRepository->find($id);
    }

    public function getAllBlood()
    {
        return $this->bloodRepository->all();
    }
}