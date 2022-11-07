<?php

namespace Database\Seeders;

use App\Models\Godparents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GodparentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Godparents::factory()
            ->count(26)
            ->create();
    }
}
