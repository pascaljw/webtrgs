<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'    => 'Asep Nurhuda',
            'email'    => 'superadmin@superadmin.com',
            'password'    => bcrypt('superadmin'),
            'rolle' => 1,
            'phone' => '085250902512'
        ]);
    }
}
