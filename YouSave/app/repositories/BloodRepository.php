<?php

namespace App\Repositories;

use App\Models\BloodType;

class BloodRepository implements BloodRepositoryInterface
{
    public function create($data)
    {
        $existingBlood = BloodType::where('type', $data['type'])->first();

        if ($existingBlood) {
            return 'exists';
        }

        BloodType::create($data);

        return 'created';

    }

    public function update($id, $data)
    {
        $blood = BloodType::findOrFail($id);
        $blood->update($data);
        return $blood;
    }

    public function delete($id)
    {
        $blood = BloodType::findOrFail($id);
        $blood->delete();
        return $blood;
    }

    public function all()
    {
        return BloodType::all();
    }
}