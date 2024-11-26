<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCategoria;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function show(Categoria $categoria){
        $productos = Producto::all()->where('categoria_id', $categoria->id);
        $datos = ['productos'=>$productos, 'categoria'=>$categoria];
        return view('productos.index')->with($datos);
    }

    public function create(){
        return view('categorias.create');
    }

    public function edit(Categoria $categoria){
        return view('categorias.edit', compact('categoria'));
    }

    public function store(FormCategoria $request){
        $c = new Categoria();
        $c->nombre = $request->nombre;
        $c->descripcion = $request->descripcion;
        $c->posicion = $request->posicion;

        $c->save();
        return redirect()->route("categorias.show", $c);
    }

    public function update(Categoria $categoria, FormCategoria $request){
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->posicion = $request->posicion;

        $categoria->save();
        return redirect()->route("categorias.show", $categoria);
    }

    public function destroy(Categoria $categoria){
        $categoria->delete();
        return redirect()->route("categorias.index")->with('status', 'Categoría eliminada con éxito');
    }


}
