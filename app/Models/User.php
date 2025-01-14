<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $fillable=[
        'email',
        'password'
    ];
    protected $guarded=[
        'id',
        'timestamp'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function cliente(){
        //el cachito de la N
        return $this->hasOne('App\Models\Cliente');
    }

    public function administrador(){
        //el cachito de la N
        return $this->hasOne('App\Models\Administrador');
    }
}
