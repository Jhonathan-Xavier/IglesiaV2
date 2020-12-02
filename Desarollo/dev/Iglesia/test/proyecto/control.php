<?php
if(isset($_REQUEST['btn_guardar'])){
    include ("../conexion/conexion.php");

    $cedula=$_POST['cedula'];
    $fechaNacimineto=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $profesion=$_POST['profesion'];
    $telefono=$_POST['telefono'];
    $mail=$_POST['mail'];
    $facebook=$_POST['facebook'];
    $direccion=$_POST['direccion'];
    $sangre=$_POST['sangre'];
    $alergia=$_POST['alergia'];

    $sql="INSERT INTO alumnos (cedula, nombres, apellidos, fechaNacimiento, correo, profesion, alergia, grupoSanguineo, facebook, direccion, telefono)
          VALUES ('$cedula','$nombre', '$apellido', '$fechaNacimineto', '$mail', '$profesion', '$alergia','$sangre', '$facebook', '$direccion', $telefono )";

    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        header("Location: index.php");
    }
}

if(isset($_REQUEST['btn_editar'])){
    include ("../conexion/conexion.php");

    $id=$_POST['id'];
    $cedula=$_POST['cedula'];
    $fechaNacimineto=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $profesion=$_POST['profesion'];
    $telefono=$_POST['telefono'];
    $mail=$_POST['mail'];
    $facebook=$_POST['facebook'];
    $direccion=$_POST['direccion'];
    $sangre=$_POST['sangre'];
    $alergia=$_POST['alergia'];

    $sql="UPDATE alumnos SET cedula='$cedula', nombres='$nombre', apellidos='$apellido', fechaNacimiento='$fechaNacimineto', correo='$mail', profesion='$profesion', alergia='$alergia', grupoSanguineo='$sangre', facebook='$facebook', direccion='$direccion', telefono='$telefono' WHERE id= '$id'";
       
    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        header("Location: index.php");
    }

}

if(isset($_REQUEST['btn_eliminar'])){
    include ("../conexion/conexion.php");

    $id=$_POST['id'];
    $sql="DELETE FROM alumnos WHERE id='$id'";
    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        header("Location: index.php");
    }
}
?>