<?php

namespace App\Repositories;

use App\Models\Confirmation;
use App\Contracts\ConfirmationRepositoryInterface;

class ConfirmationRepository implements ConfirmationRepositoryInterface
{
    public function getAll()
    {
        return Confirmation::all();
    }

    public function getById($orderId)
    {
        return Confirmation::findOrFail($orderId);
    }

    public function store(array $orderDetails)
    {
        return Confirmation::create($orderDetails);
    }

    public function delete($orderId)
    {
        Confirmation::destroy($orderId);
    }
}
