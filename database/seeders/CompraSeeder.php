<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compra::create([
            'id_producto'=> 80,
            'id_user'=> 1,
            'comprado'=>true,
            'cantidad'=> 9
        ]);
        Compra::create([
            'id_producto'=> 25,
            'id_user'=> 1,
            'comprado'=>true,
            'cantidad'=> 4
        ]);
        Compra::create([
            'id_producto'=> 3,
            'id_user'=> 1,
            'comprado'=>true,
            'cantidad'=> 6
        ]);
        Compra::create([
            'id_producto'=> 7,
            'id_user'=> 1,
            'comprado'=>true,
            'cantidad'=> 2
        ]);
        Compra::create([
            'id_producto'=> 12,
            'id_user'=> 1,
            'comprado'=>true,
            'cantidad'=> 1
        ]);
    }
}
