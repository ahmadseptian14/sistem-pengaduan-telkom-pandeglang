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
            // [
            //     'name' => 'Dewanda',
            //     'email' => 'dewanda@gmail.com',
            //     'password' => Hash::make('dewanda12345'),
            //     'phone' => '0821221211',
            //     'nomor_pelanggan' => '0001',
            //     'roles' => 'PELANGGAN'
            // ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'),
                'phone' => '08965212177',
                'nomor_pelanggan' => '0002',
                'roles' => 'ADMIN'
            ],
            // [
            //     'name' => 'Teknisi',
            //     'email' => 'teknisi@gmail.com',
            //     'password' => Hash::make('teknisi12345'),
            //     'phone' => '08965212121',
            //     'nomor_pelanggan' => '0003',
            //     'roles' => 'TEKNISI'
            // ],
        ];

        DB::table('users')->insert($users);
    }
}
