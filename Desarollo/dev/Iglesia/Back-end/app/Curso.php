<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    private $fillable = ['nombre', 'descripcion'];
    //Le agregué nombre del curso porque lo consideré necesario, un curso puede ser "Primero BGU", "Bautizo" "Etc"
    //Mas bien la descripcion no me parece necessario

    //Posdata, curso es el espacio físico o se refiere a el nivel en el que el estudiante está?

    //Si es el físico entonces no debería relacionarse con un horario de clase? Ej. Bautismo de 11 a 13
    //De ser el de nivel, entonces no debería estar relacionado con un curso físico? Ej. Bautismo tienen en el aula 25

    //Aunque los puedo trabajar como atributos si en la misma aula siempre se hace un curso (de bautismo, de sacrament, etc) y no otros.

}
