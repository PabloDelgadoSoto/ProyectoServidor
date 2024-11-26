<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'descripcion',
        'posicion',
    ];
    protected $guarded=[
        'id',
        'timestamp'
    ];
    public function productos(){
        //el cachito de la N
        return $this->hasMany('App\Models\Producto');
    }
}
