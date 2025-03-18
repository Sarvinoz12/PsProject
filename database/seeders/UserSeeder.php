<?php

namespace Database\Seeders;

use App\Models\Psixolog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param $users
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Psixolg',
            'email' => 'psixolg@gmail.com',
            'password' => Hash::make('password'),

            'role_id' => 2
        ]);
        User::create([
            'name' => 'User',
            'email' => 'userg@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3
        ]);

        $users=User::factory(10)->create();
//        foreach ($users as $user) {
//            if ($user->role_id == 2) {
//                Psixolog::create([
//                    'user_id' => $user->id,
//                ]);
//            }
//        }
    }
}
