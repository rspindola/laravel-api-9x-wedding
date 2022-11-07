<?php

namespace Database\Seeders;

use App\Models\Confirmation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfirmationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Confirmation::factory()
            ->count(25)
            ->create();
    }
}
