<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        
        User::create([
            'name' => 'জনি হাসান',
            'email' => 'johnny@jonny.com',
            'password' => Hash::make('johnny@jonny.com'),
        ]);
    }
}
