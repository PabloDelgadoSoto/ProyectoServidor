<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable=[
        'cantidad',
        'comprado',
        'id_producto',
        'id_cliente'

    ];
    protected $guarded=[
        'id',
        'timestamp'
    ];

    public function cliente(){
        //el cachito de la N
        return $this->belongsTo('App\Models\Cliente');
    }

    public function producto(){
        //el cachito de la N
        return $this->belongsTo('App\Models\Producto');
    }
}
