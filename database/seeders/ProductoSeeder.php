<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            "nombre" => "Aquarius",
            "descripcion" => "Bebida con alto porcentaje de azucares y sales minerales, contiene 2l",
            "precio" => 1.50,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Batido de chocolate",
            "descripcion" => "Es un batido de chocolate de la marca Puleva y contiene un 98% de cacao, contiene 1l",
            "precio" => 2.30,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Batido de vainilla",
            "descripcion" => "Es un batido de vainilla de la marca Puleva, contiene 1l",
            "precio" => 2.10,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Cerveza heineken",
            "descripcion" => "Es una bebida amarga que contiene un 5% de alcohol, contiene 33cl",
            "precio" => 0.80,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Cerveza mahou",
            "descripcion" => "Es una bebida amarga que contiene un 5% de alcohol, contiene 33cl",
            "precio" => 0.95,
            "categoria_id" => 1,
            "disponible" => false
        ]);Producto::create([
            "nombre" => "Coca-Cola",
            "descripcion" => "La mejor bebida hidratante de España, contiene 2l",
            "precio" => 2.50,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Nestea",
            "descripcion" => "Bebida energética que contiene 1,5l",
            "precio" => 1.80,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Horchata",
            "descripcion" => "Bebida elaborada a partir de la leche y azucares, contiene 1,5l",
            "precio" => 1.39,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Leche",
            "descripcion" => "Leche entera sin ningun aderente y fresca que contiene 1,5l",
            "precio" => 1.20,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Legendario",
            "descripcion" => "Bebida que contiene gran porcentaje de alcohol 28,5% y que contiene 0,75l",
            "precio" => 8.90,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Vodka",
            "descripcion" => "Bebida que contiene gran porcentaje de alcohol 38,5% y que contiene 0,75l",
            "precio" => 6.20,
            "categoria_id" => 1,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Albondigas",
            "descripcion" => "Preparado de albondigas con cantidad de 500gr",
            "precio" => 3.60,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Filete de Lomo",
            "descripcion" => "Filete troceado de lomo que dan lugar a 500gr",
            "precio" => 4.20,
            "categoria_id" => 2,
            "disponible" => false
        ]);Producto::create([
            "nombre" => "Filete de ternera",
            "descripcion" => "Filete de ternera con un total de 500gr",
            "precio" => 3.90,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Alitas",
            "descripcion" => "Paquete de alitas con un total de 500gr",
            "precio" => 2.90,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Bacon",
            "descripcion" => "Paquete de baconcon un total de 500gr",
            "precio" => 1.50,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Costillar",
            "descripcion" => "Costillar de cerdo con un total de 500gr",
            "precio" => 7.50,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Paletilla de cordero",
            "descripcion" => "Paletilla de cordero con un total de 1500gr",
            "precio" => 12.80,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pechuga de pollo",
            "descripcion" => "Filetes de pollo trozeados con un total de 500gr",
            "precio" => 3.35,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Secreto",
            "descripcion" => "Filete de secreto con un total de 500gr",
            "precio" => 5.15,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Taco de jamon",
            "descripcion" => "Taco de jamon para caldoscon un total de 500gr",
            "precio" => 1.60,
            "categoria_id" => 2,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Cereza",
            "descripcion" => "Cerezas de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 4.59,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Fresa",
            "descripcion" => "Fresas de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 3.59,
            "categoria_id" => 3,
            "disponible" => false
        ]);Producto::create([
            "nombre" => "Kiwi",
            "descripcion" => "Kiwis de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 2.80,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Manzana",
            "descripcion" => "Manzanas de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 1.90,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Melocoton",
            "descripcion" => "Melocotones de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 4.09,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Melon",
            "descripcion" => "Melones de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 6.80,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Naranja",
            "descripcion" => "Naranjas de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 2.97,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pera",
            "descripcion" => "Peras de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 3.78,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pina",
            "descripcion" => "Piñas de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 3.53,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Platano",
            "descripcion" => "Platanos de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 2.40,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Sandia",
            "descripcion" => "Sandias de la huerta ecologica de I.E.S Tierno Galvan, 1kg",
            "precio" => 4.01,
            "categoria_id" => 3,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Chips ahoy",
            "descripcion" => "Paquete de galletas chips ahoy",
            "precio" => 1.50,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Chiquilin",
            "descripcion" => "Paquete de galletas chiquilin",
            "precio" => 1.10,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Dinosaurus",
            "descripcion" => "Paquete de galletas dinosaurus",
            "precio" => 1.89,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Donuts",
            "descripcion" => "Paquete de galletas con sabor a donuts glaseados",
            "precio" => 2.23,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Filipinos",
            "descripcion" => "Paquete de galletas filipinos",
            "precio" => 1.20,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Galletas Maria",
            "descripcion" => "Paquete de galletas maria",
            "precio" => 1.52,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Huesito",
            "descripcion" => "Paquete de huesitos",
            "precio" => 2.60,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Kit kat",
            "descripcion" => "Paquete de kit kats",
            "precio" => 3.19,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Nocilla",
            "descripcion" => "Paquete de galletas rellenas por dentro de nocilla",
            "precio" => 3.01,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Oreo",
            "descripcion" => "Paquete de galletas oreo",
            "precio" => 1.70,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Principe",
            "descripcion" => "Paquete de galletas principe",
            "precio" => 0.98,
            "categoria_id" => 4,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Amoniaco",
            "descripcion" => "Producto que se utiliza para multitud de cosas y muy efectivo",
            "precio" => 1.98,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Abrillantador",
            "descripcion" => "Producto que se utiliza para abrillantar los utensilios",
            "precio" => 2.95,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Detergente",
            "descripcion" => "Paroducto que se utiliza para limpiar la ropa",
            "precio" => 0.98,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Fairy",
            "descripcion" => "Producto que se utiliza para limpiar los platos, manchas, etc",
            "precio" => 3.12,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Fregasuelos",
            "descripcion" => "Producto que se utiliza para fregar el suelo de la casa",
            "precio" => 2.39,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Lejia",
            "descripcion" => "Producto que se utiliza para el suelo, manchas, etc",
            "precio" => 3.64,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Limpia cristales",
            "descripcion" => "Producto que se utiliza para limpiar cristales",
            "precio" => 1.15,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Limpia platos",
            "descripcion" => "Producto que se utiliza para limpiar platos",
            "precio" => 1.34,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Quita grasas",
            "descripcion" => "Producto que se utiliza para quitar la grasa de la encimera u otros sitios",
            "precio" => 2.49,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Suavizante",
            "descripcion" => "Producto que se utiliza para suavizar tus prendas de ropa en el lavado",
            "precio" => 3.97,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Vitroclean",
            "descripcion" => "Producto que se utiliza para limpiar la vitroceramica",
            "precio" => 4.48,
            "categoria_id" => 5,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Bacalao",
            "descripcion" => "Bacalao fresco cazado en el mar de Parla y contiene 500gr",
            "precio" => 5.48,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Dorada",
            "descripcion" => "Dorada fresca cazada en el mar de Parla y contiene 500gr",
            "precio" => 3.98,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Langostino",
            "descripcion" => "Langostinos frescos cazados en el mar de Parla y contiene 500gr",
            "precio" => 9.21,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Lubina",
            "descripcion" => "Lubina fresca cazada en el mar de Parla y contiene 500gr",
            "precio" => 6.18,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Mejillon",
            "descripcion" => "Mejillones frescos cazados en el mar de Parla y contiene 500gr",
            "precio" => 6.89,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Merluza",
            "descripcion" => "Merluza fresca cazada en el mar de Parla y contiene 500gr",
            "precio" => 3.59,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pulpo",
            "descripcion" => "Pulpo fresco cazado en el mar de Parla y contiene 500gr",
            "precio" => 8.88,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Rodaballo",
            "descripcion" => "Rodaballo fresco cazado en el mar de Parla y contiene 500gr",
            "precio" => 4.87,
            "categoria_id" => 6,
            "disponible" => false
        ]);Producto::create([
            "nombre" => "Salmon",
            "descripcion" => "Salmon fresco cazado en el mar de Parla y contiene 500gr",
            "precio" => 7.95,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Sepia",
            "descripcion" => "Sepia fresca cazada en el mar de Parla y contiene 500gr",
            "precio" => 7.62,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Trucha",
            "descripcion" => "Trucha fresca cazada en el rio de Parla y contiene 500gr",
            "precio" => 4.93,
            "categoria_id" => 6,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso azul",
            "descripcion" => "Cuña de queso azul de avila",
            "precio" => 4.20,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso blanco ribera",
            "descripcion" => "Cuña de queso balnco de ribera ",
            "precio" => 5.46,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso cabra pimenton",
            "descripcion" => "Cuña de queso de cabra fermentado en pimenton",
            "precio" => 8.49,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso curado al romero",
            "descripcion" => "Cuña de queso curado al romero",
            "precio" => 6.18,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso curado",
            "descripcion" => "Cuña de queso curado",
            "precio" => 2.98,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Queso de la mancha semicurado",
            "descripcion" => "Cuña de queso semicurado elaborasdo en castilla la mancha",
            "precio" => 4.20,
            "categoria_id" => 7,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Ajo",
            "descripcion" => "Ajo sacado de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 1.20,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Apio",
            "descripcion" => "Brocoli sacado de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 2.26,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Brocoli",
            "descripcion" => "Ajo sacado de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 1.20,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Cebolla",
            "descripcion" => "Cebolla sacada de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 3.84,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Coliflor",
            "descripcion" => "Coliflor sacada de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 0.49,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Lechuga",
            "descripcion" => "Lechuga sacada de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 2.56,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Patata",
            "descripcion" => "Patata sacada de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 3.15,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pepino",
            "descripcion" => "Pepino sacado de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 1.69,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Pimiento",
            "descripcion" => "Pimiento sacado de la huerta del I.E.S Tierno Galvan y contine 650gr",
            "precio" => 2.16,
            "categoria_id" => 8,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Natillas",
            "descripcion" => "Pack de 4 natillas de vainilla ",
            "precio" => 2.20,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Flan de queso",
            "descripcion" => "Pack de 4 flanes de queso",
            "precio" => 1.75,
            "categoria_id" => 9,
            "disponible" => true
        ]);
        Producto::create([
            "nombre" => "Flan",
            "descripcion" => "Pack de 4 flanes de sabor vainilla",
            "precio" => 0.75,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Arroz con leche",
            "descripcion" => "Pack de 4 arroces con leche y espolboreados con canela",
            "precio" => 2.10,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Gelatina",
            "descripcion" => "Pack de 4 gelatinas sabor fresa",
            "precio" => 1.26,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Griego natural",
            "descripcion" => "Pack de 4 yogures griegos naturales con un poco de azucar",
            "precio" => 0.86,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Mousse de chocolate",
            "descripcion" => "Pack de 4 mousse de chocolate",
            "precio" => 3.06,
            "categoria_id" => 9,
            "disponible" => true
        ]);Producto::create([
            "nombre" => "Yogur fresa",
            "descripcion" => "Pack de 4 yogures con sabor a fresa",
            "precio" => 1.36,
            "categoria_id" => 9,
            "disponible" => true
        ]);
    }
}
