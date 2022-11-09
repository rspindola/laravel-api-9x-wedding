<?php

namespace App\Repositories;

use App\Models\Guest;
use App\Contracts\GuestRepositoryInterface;

class GuestRepository implements GuestRepositoryInterface
{
    public function getAll()
    {
        return Guest::all();
    }

    public function getById($guestId)
    {
        return Guest::findOrFail($guestId);
    }

    public function store(array $guestDetails)
    {
        return Guest::create($guestDetails);
    }

    public function update($guestId, array $guestDetails)
    {
        Guest::where('id', '=', $guestId)->update($guestDetails);
        return Guest::findOrFail($guestId);
    }

    public function delete($guestId)
    {
        Guest::destroy($guestId);
    }
}
