<?php

if(isset($_REQUEST['guardar'])){
    include ("../conexion/conexion.php");

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    //$nivel=$_POST['nivel'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $celular=$_POST['celular'];
    $correo=$_POST['correo'];
    $facebook=$_POST['facebook'];
    $estadoCivil=$_POST['estadoCivil'];
    $profesion=$_POST['profesion'];
    $alergia=$_POST['alergias'];
    $grupoSanguineo=$_POST['grupoSanguineo'];
    $catequistaDesde=$_POST['catequistaDesdes'];

    $sql="INSERT INTO catequistas(nombres, apellidos, cedula, fechaNacimiento, direccion, telefono, celular, correo, facebook, estadoCivil, profesion, alergia, grupoSanguineo, catequistaDesde) 
          VALUES('$nombres','$apellidos','$cedula','$fechaNacimiento','$direccion','$telefono','$celular','$correo','$facebook','$estadoCivil','$profesion','$alergia','$grupoSanguineo','$catequistaDesde')";

    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        echo "Se ejecutó!";
        header("Location: index.php");
    }else{
        echo "No se mandó a la base :(";
    }
}

if(isset($_REQUEST['modificar'])){
    include ("../conexion/conexion.php");

    $id_catequista=$_POST['id'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    //$nivel=$_POST['nivel'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $celular=$_POST['celular'];
    $correo=$_POST['correo'];
    $facebook=$_POST['facebook'];
    $estadoCivil=$_POST['estadoCivil'];
    $profesion=$_POST['profesion'];
    $alergia=$_POST['alergias'];
    $grupoSanguineo=$_POST['grupoSanguineo'];
    $catequistaDesde=$_POST['catequistaDesdes'];

    $sql="UPDATE alumnos SET  nombres='$nombres', apellidos='$apellidos', cedula='$cedula', fechaNacimiento='$fechaNacimiento', direccion='$direccion', telefono='$telefono',
                              celular='$celular', correo='$correo', facebook='$facebook', estadoCivil='$estadoCivil', alergia='$alergia', grupoSanguineo='$grupoSanguineo',
                              catequistaDesde='$catequistaDesde', WHERE id_catequista = '$id_catequista'";

    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        echo "hay conexion";
        header("Location: index.php");
    }else{
        echo "no se mandó";
    }

}

?>
