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
                'name'      => 'tiara',
                'email'     => 'tiara@tiara.com',
                'password'  =>  bcrypt('12345'),
                'telepon'   => '081332496225',
                'alamat'    => 'sidoarjo',
                'foto'      => 'tiara.png',
                'toko'      => 'cv. maju makmur',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
