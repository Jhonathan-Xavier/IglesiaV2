<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    private $fillable = ['cedula', 'nombres', 'apellidos', 'telefono', 'correo'];
}
