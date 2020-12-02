<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    private $fillable = ['cedula', 'nombres', 'apellidos', 'fechaNacimiento', 'correo', 'alergia', 'grupoSanguineo', 'facebook', 'direccion', 'telefono'];
    //Mismas preguntas que con funcionario xd
    //Telefono Representatne  va a venir como FK de la entidad Representante
}
