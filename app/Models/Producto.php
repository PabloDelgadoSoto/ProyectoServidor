<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'moneda',
        'disponible',
        'categoria_id'
    ];

    protected $guarded = [
        'id',
        'timestamp'
    ];
    public function categoria(){
        //el cachito de la relacion 1
        return $this->belongsTo(Categoria::class);
    }

    public function compras(){
        //el cachito de la N
        return $this->hasMany('App\Models\Compra');
    }
}
