<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Compra;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FormCompra;
use App\Models\User;

class UserController extends Controller{

    public function index(){
        $comprados=[];
        $compras=[];
        $total = 0;
        $tmp = Compra::all()->where('id_user', Auth::user()->id)->where('comprado', false);
        foreach($tmp as $c){
            $producto = Producto::find($c->id_producto);
            array_push($comprados, $producto);
            array_push($compras, $c);
            $total+= $producto->precio * $c->cantidad;
        }
        return view('clientes.cesta', compact('compras', 'comprados', 'total'));
    }

    public function create(){
        return view('clientes.registrar');
    }

    public function store(RegisterRequest $request){
        $u = new User();
        $u->email = $request->email;
        $u->password = $request->password;
        $u->assignRole('cliente');
        $u->save();
        return redirect()->route('home');
    }

    public function update(){
        $compra = Compra::all()->where('id_user', Auth::user()->id)->where('comprado', false);
        foreach($compra as $c){
            $c->comprado = true;
            $c->save();
        }
        return redirect()->route("users.index");
    }

    public function destroy(Compra $compra){
        $compra->delete();
        return redirect()->route("users.index");
    }

    public function edit(Producto $producto, FormCompra $request){
        $c = new Compra();
        $c->id_user = Auth::user()->id;
        $c->id_producto = $producto->id;
        $c->comprado = false;
        $c->cantidad = $request->cantidad;
        $c->save();
        return redirect()->route('productos.index');
    }
}
