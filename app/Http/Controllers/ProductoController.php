<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormProducto;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        $categoria = null;
        return view('productos.index', compact('productos','categoria'));
    }

    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto){
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function store(FormProducto $request){
        $p = new Producto();
        $p->nombre = $request->nombre;
        $p->descripcion = $request->descripcion;
        $p->precio = $request->precio;
        $p->moneda = $request->moneda;
        if(isset($request->disponible)){
            $p->disponible = 1;
        } else {
            $p->disponible = 0;
        }
        $p->categoria_id = $request->categoria_id;
        $p->save();
        return redirect()->route("productos.show", $p);
    }

    public function update(Producto $producto, FormProducto $request){
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->moneda = $request->moneda;
        if(isset($request->disponible)){
            $producto->disponible = 1;
        } else {
            $producto->disponible = 0;
        }
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        return redirect()->route("productos.show", $producto);
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route("productos.index")->with('status', 'Producto eliminado con éxito');
    }

    public function create(){
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

}
