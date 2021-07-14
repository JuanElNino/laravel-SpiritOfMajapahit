<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => "Admin",
                'username' => "admin",
                'role' => "admin",
                'email' => "admin@gmail.com",
                'email_verified_at' => null,
                'alamat' => "Malang",
                'password' => Hash::make('admin'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama' => "Juan",
                'username' => "juan",
                'role' => "user",
                'email' => "juanelnino433@gmail.com",
                'email_verified_at' => null,
                'alamat' => "Malang",
                'password' => Hash::make('juan1234'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama' => "Nurul",
                'username' => "nurul",
                'role' => "user",
                'email' => "nurul12@gmail.com",
                'email_verified_at' => null,
                'alamat' => "Blitar",
                'password' => Hash::make('nurul123'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama' => "Martin",
                'username' => "martin",
                'role' => "user",
                'email' => "martin24@gmail.com",
                'email_verified_at' => null,
                'alamat' => "Mojokerto",
                'password' => Hash::make('martinganteng'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
            [
                'nama' => "Miya",
                'username' => "miya",
                'role' => "user",
                'email' => "miyaa117@gmail.com",
                'email_verified_at' => null,
                'alamat' => "Mojokerto",
                'password' => Hash::make('miya1234'),
                'remember_token' => null,
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime
            ],
        ]);
    }
}
