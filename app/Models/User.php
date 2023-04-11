<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //preenchiveis 
    protected $fillable = [
        'USUARIO_NOME',
        'USUARIO_EMAIL',
        'USUARIO_SENHA',
        'USUARIO_CPF'
    ];

    //se vc tentar colocar usuario e senha ele n vai deixar
    protected $hidden = [
        'USUARIO_SENHA'
        
    ];

    protected $table= "USUARIO";
    protected $primaryKey = "USUARIO_ID";
    public $timestamps = false;

}
