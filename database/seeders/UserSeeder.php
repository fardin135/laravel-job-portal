<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        User::create([
            'name' => 'Admin Khan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail'),
            'is_admin' => '1',
            'user_role' => 'Admin',

        ]);
        //Company
        User::create([
            'name' => 'Company Khan',
            'email' => 'company@gmail.com',
            'password' => bcrypt('company@gmail'),
            'user_role' => 'Company',

        ]);
        //Candidate
        User::create([
            'name' => 'Candidate Khan',
            'email' => 'candidate@gmail.com',
            'password' => bcrypt('candidate@gmail'),
            'user_role' => 'Candidate',

        ]);
    }
}
