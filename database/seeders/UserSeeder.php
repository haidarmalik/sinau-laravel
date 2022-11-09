<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Tejo Haidar Malik',
            'email' => 'thaidar@gmail.com',
            'password' => bcrypt("haidar")
        ]);
    }
}
