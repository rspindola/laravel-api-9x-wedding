<?php

namespace App\Contracts;

interface MessageRepositoryInterface
{
    public function getAll();
    public function getById($message);
    public function delete($message);
    public function store(array $messageDetails);
}
