<?php

namespace Database\Seeders;

use App\Models\Psixolog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PsixolgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Psixolog::factory()->count(10)->create();
    }
}
