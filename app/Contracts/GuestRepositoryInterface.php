<?php

namespace App\Contracts;

interface GuestRepositoryInterface
{
    public function getAll();
    public function getById($guestId);
    public function delete($guestId);
    public function store(array $guestDetails);
    public function update($guestId, array $guestDetails);
}
