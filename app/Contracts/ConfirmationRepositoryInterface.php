<?php

namespace App\Contracts;

interface ConfirmationRepositoryInterface
{
    public function getAll();
    public function getById($confirmationId);
    public function delete($confirmationId);
    public function store(array $confirmationDetails);
}
