<?php

namespace App\Contracts;

interface GodparentsRepositoryInterface
{
    public function getAll();
    public function getById($godparentsId);
    public function delete($godparentsId);
    public function store(array $godparentsDetails);
}
