<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padrino extends Model
{
    private $fillable = ['cedula', 'nombres', 'apellidos'];
}
