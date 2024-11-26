<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email'=>'juan@gmail.com',
            'password'=>'hola123'
        ])->assignRole('cliente');
        User::create([
            'email'=>'admin@gmail.com',
            'password'=>'admin'
        ])->assignRole('administrador');
    }
}
