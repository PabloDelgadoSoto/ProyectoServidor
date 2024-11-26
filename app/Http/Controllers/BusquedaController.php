<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class BusquedaController extends Controller
{
    public function buscar(Request $request){
        $atributo = 'precio';
        $escrito = $request->escrito;
        if($request->buscar=='like'){
            $atributo = 'nombre';
            $escrito = '%'.$escrito.'%';
        }
        if($escrito==null){
            $escrito='';
        }
        $productos = Producto::select('id', 'nombre', 'precio', 'moneda', 'disponible')->where($atributo, $request->buscar, $escrito)->
        where('categoria_id', 'like', '%'.$request->categoria.'%')->orderBy($request->orden)->get();
        $datos = ['productos'=>$productos, 'categoria'=>$request->categoria, 'token'=>$request->_token];
        return json_encode($datos);
    }
}
