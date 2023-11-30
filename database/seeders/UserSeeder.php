<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Julian Elizondo Cerda',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Julian Elizondo Cerda',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(10)->create();
    }
}