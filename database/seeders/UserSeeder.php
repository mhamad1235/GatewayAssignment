<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'mhamad',
            'email' => 'mhamad@gmail.com',
            'password' => bcrypt('123456'),
            'isAdmin'=>'1'
        ]);
        User::create([
            'name' => 'branch',
            'email' => 'branch@gmail.com',
            'password' => bcrypt('123456'),
            'isAdmin'=>'0'
        ]);
    }
}
