<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nis' => '0067054482',
            'profil' => 'user.jpg',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('sandi123'),
            'role' => 'admin',
        ]);
    }
}
