<?php

namespace App\Repositories;

use App\Models\Godparents;
use App\Contracts\GodparentsRepositoryInterface;

class GodparentsRepository implements GodparentsRepositoryInterface
{
    public function getAll()
    {
        return Godparents::all();
    }

    public function getById($godparentsId)
    {
        return Godparents::findOrFail($godparentsId);
    }

    public function store(array $godparentsDetails)
    {
        return Godparents::create($godparentsDetails);
    }

    public function delete($godparentsId)
    {
        Godparents::destroy($godparentsId);
    }
}
