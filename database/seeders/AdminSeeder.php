<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'superadmin@admin.com', 
            'password' => Hash::make('superadmin@admin.com'), 
            'email_verified_at' => now(),
        ]);
    }
}
