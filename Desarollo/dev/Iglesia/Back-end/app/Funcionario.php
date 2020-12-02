<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    private $fillable = ['cedula','nombres','apellidos', 'fechaNacimiento', 'correo', 'estadoCivil','profesion', 'alergia','grupoSanguineo','fechaInicio', 'facebook', 'direccion'];
    //El estado civil lo pongo así, o sea en el MER indica que esto lo traigo desde otra tabla
    //Pero a mi parecer está mal eso, porque yo no puedo ser viudo y a la vez casado.

    //Alergia debe ser un arreglo: Yo puedo tener varias alergias
    //Profesión no debería ir porque Funcionario es una profesión
    //Fecha inicio ¿De qué es? del curso? de cuando se integra a la parroquia? ¿De qué?
    //facebook es una url al perfil o el usuario de facebook? o algún otro dato correspondiente a facebook?



}
