<?php

namespace Database\Seeders;

use App\Models\Psixolog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PsixolgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    Psixolog::create([
        'name' => 'Psixolg',
        'email' => 'psixolg@gmail.com',
        'password' => Hash::make('password'),
        'spes'=>'Bolalar',
        'tajriba'=>12,
    ]);
        Psixolog::factory()->count(10)->create();
    }
}
