<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Admin Utama',
            'email' => 'kdai@example.com',
            'password' => bcrypt('kampungdigital'),
        ]);
    }
}
