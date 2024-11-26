<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            "nombre" => "Bebidas",
            "descripcion" => "Todos los productos que sean bebidas",
            "posicion" => 1

        ]);
        Categoria::create([
            "nombre" => "Carnes",
            "descripcion" => "Todos los productos son carnes de diferentes animales",
            "posicion" => 2

        ]);
        Categoria::create([
            "nombre" => "Frutas",
            "descripcion" => "Todos los productos que son frutas",
            "posicion" => 3

        ]);
        Categoria::create([
            "nombre" => "Galletas",
            "descripcion" => "Todos los productos que son galletas",
            "posicion" => 4

        ]);
        Categoria::create([
            "nombre" => "Limpieza",
            "descripcion" => "Todos los productos que se utilizan para la limpieza del hogar o de otro tipo",
            "posicion" => 5

        ]);
        Categoria::create([
            "nombre" => "Pescados",
            "descripcion" => "Todos los productos que son pescados variados",
            "posicion" => 6

        ]);
        Categoria::create([
            "nombre" => "Quesos",
            "descripcion" => "Todos los productos que son diferentes quesos",
            "posicion" => 7

        ]);
        Categoria::create([
            "nombre" => "Verduras",
            "descripcion" => "Todos los productos son verduras",
            "posicion" => 8

        ]);
        Categoria::create([
            "nombre" => "Yogures",
            "descripcion" => "Todos los productos que son yogures",
            "posicion" => 9

        ]);
    }
}
