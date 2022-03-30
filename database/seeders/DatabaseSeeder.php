<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            ],
            [
                'name'      => 'tiara',
                'email'     => 'tiara@admin.com',
                'password'  => bcrypt('tiara'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
