<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Ivan Dasilao',
                'email' => 'dasilaoivan2@gmail.com',
                'password' => Hash::make('mingkhalifa2'),
                'is_admin' => 1,
                'barangay_id' => 21,
            ],
            ['name' => 'Barangay Agusan Canyon',
                'email' => 'brgyagusancanyon@gmail.com',
                'password' => Hash::make('brgyagusancanyon'),
                'is_admin' => 0,
                'barangay_id' => 1,
            ]
            
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'is_admin' => $user['is_admin'],
                'barangay_id' => $user['barangay_id'],
            ]);
        }
    }
}
