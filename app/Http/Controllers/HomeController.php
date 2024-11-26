<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    public function __invoke(){
        $populares = [];
        $idPopulares = DB::table('compras')->select('id_producto', DB::raw("SUM(cantidad) as total"))->groupBy('id_producto')->orderBy('total', 'desc')->paginate(5);
        foreach($idPopulares as $p){
            $tmp = Producto::all()->where('id', $p->id_producto);
            array_push($populares, $tmp);
        }
        $baratos = Producto::select('id', 'nombre', 'precio', 'moneda', 'disponible')->orderBy('precio')->where('disponible', true)->paginate(5);
        $datos = ['baratos' => $baratos, 'populares' => $populares,'categoria' => null];
        return view('home')->with($datos);
    }
}
