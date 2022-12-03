<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jagan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
           

        ]);

        User::create([
            'name' => 'Jagan',
            'email' => 'jagan@gmail.com',
            'is_admin' =>0,
            'password' => bcrypt('123456'),
           

        ]);
    }
}
