<?php

if(isset($_REQUEST['guardar'])){
    include ("../conexion/conexion.php");

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $celular=$_POST['celular'];
    $mail=$_POST['mail'];
    $grupo_sanguineo=$_POST['grupo_sanguineo'];
    $alergias=$_POST['alergias'];
    $fortalezas = $_POST['fortalezas'];
    $nombre_papa= $_POST['nombre_papa'];
    $oficio_papa= $_POST['oficio_papa'];
    $telefono_papa= $_POST['telefono_papa'];
    $nombre_mama= $_POST['nombre_mama'];
    $oficio_mama= $_POST['oficio_mama'];
    $telefono_mama= $_POST['telefono_mama'];
    $allegado= $_POST['allegado'];
    $contacto_emergencia= $_POST['contacto_emergencia'];
    $telefono_emergencia= $_POST['telefono_emergencia'];
    $parentezco= $_POST['parentezco'];
    $observacion= $_POST['observacion'];

    $sql="INSERT INTO catequizados(nombres, apellidos, fecha_nacimiento, edad, direccion, telefono, celular, mail, grupo_sanguineo, alergias, fortalezas, nombre_papa, oficio_papa, telefono_papa, nombre_mama, oficio_mama, telefono_mama, allegado, contacto_emergencia, telefono_emergencia, parentezco, observacion) 
          VALUES( '$nombres', '$apellidos', '$fecha_nacimiento', '$edad', '$direccion', '$telefono', '$celular', '$mail', '$grupo_sanguineo', '$alergias', '$fortalezas', '$nombre_papa', '$oficio_papa', '$telefono_papa', '$nombre_mama', '$oficio_mama', '$telefono_mama', '$allegado', '$contacto_emergencia', '$telefono_emergencia', '$parentezco', '$observacion')";

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

    $id_catequisado=$_POST['id_catequisado'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $celular=$_POST['celular'];
    $mail=$_POST['mail'];
    $grupo_sanguineo=$_POST['grupo_sanguineo'];
    $alergias=$_POST['alergias'];
    $fortalezas = $_POST['fortalezas'];
    $nombre_papa= $_POST['nombre_papa'];
    $oficio_papa= $_POST['oficio_papa'];
    $telefono_papa= $_POST['telefono_papa'];
    $nombre_mama= $_POST['nombre_mama'];
    $oficio_mama= $_POST['oficio_mama'];
    $telefono_mama= $_POST['telefono_mama'];
    $allegado= $_POST['allegado'];
    $contacto_emergencia= $_POST['contacto_emergencia'];
    $telefono_emergencia= $_POST['telefono_emergencia'];
    $parentezco= $_POST['parentezco'];
    $observacion= $_POST['observacion'];

    $sql="UPDATE catequizados SET  nombres='$nombres', apellidos='$apellidos', fecha_nacimiento='$fecha_nacimiento', direccion='$direccion', telefono='$telefono',
                              celular='$celular', mail = '$mail', grupo_sanguineo='$grupo_sanguineo', alergias='$alergias', fortalezas='$fortalezas',
                              nombre_papa= '$nombre_papa', oficio_papa= '$oficio_papa', telefono_papa='$telefono_papa',  nombre_mama= '$nombre_mama',
                              oficio_mama= '$oficio_mama', telefono_mama='$telefono_mama',  allegado='$allegado', contacto_emergencia='$contacto_emergencia',
                              telefono_emergencia= '$telefono_emergencia', parentezco='$parentezco', observacion='$observacion,'  WHERE id_catequisado = '$id_catequisado'";

    $ejecutar=mysqli_query($conexion, $sql);

    if($ejecutar){
        echo "hay conexion";
        header("Location: index.php");
    }else{
        echo "no se mandó";
    }

}

?>
