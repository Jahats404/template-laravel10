<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Handoko',
            'email' => 'handoko@gmail.com',
            'password' => Hash::make(12345),
            'role_id' => '1',
        ]);
        User::create([
            'name' => 'tekotok',
            'email' => 'tekotok@gmail.com',
            'password' => Hash::make(12345),
            'role_id' => '2',
        ]);
    }
}