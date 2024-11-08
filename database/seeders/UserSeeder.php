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
            'email' => 'gulam@resolusiweb.com',
            'password' => Hash::make('default!'),
        ]);
        User::create([
            'email' => 'admin@resolusiweb.com',
            'password' => Hash::make('default!'),
        ]);
    }
}
