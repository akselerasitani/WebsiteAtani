<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'      => 'admin',
                'email'     => 'admin@admin.com',
                'password'  => bcrypt('12345'),
            ]
            // [
            //     'name' => 'Admin',
            //     'email' => 'admin@gmail.com',
            //     'role' => 'admin',
            //     'password' => bcrypt('123456'),
            //     'telepon' => '0000000',
            //     'alamat' => 'admin',
            // ],
            // [
            //     'name' => 'user',
            //     'email' => 'user@gmail.com',
            //     'role' => 'user',
            //     'password' => bcrypt('123456'),
            //     'telepon' => '081332496225',
            //     'alamat' => 'sidoarjo',
            // ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
