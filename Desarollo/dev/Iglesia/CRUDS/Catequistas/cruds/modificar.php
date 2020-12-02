<?php
include ("../conexion/conexion.php");
date_default_timezone_set("America/Guayaquil");
$fecha_actual = date("Y-m-d H:i");
@$id_catequistas=$_GET['id'];

$consulta="SELECT * FROM catequistas WHERE id_catequista='$id_catequistas'";
$ejecutar=mysqli_query($conexion, $consulta);


while ($row=mysqli_fetch_array($ejecutar)){

    $id_catequistas = $row[0];
    $nombres = $row[1];
    $apellidos = $row[2];
    $cedula = $row[3];
    $fechaNacimiento= $row[4];
    $direccion = $row[5];
    $telefono = $row[6];
    $celular = $row[7];
    $correo= $row[8];
    $facebook = $row[9];
    $estadoCivil = $row[10];
    $profesion = $row[11];
    $alergia =  $row[12];
    $grupoSanguineo = $row[13];
    $catequistaDesde = $row[14];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Catequista</title>

</head>
<body>

    <div class="row" style="text-align: center;">
        <!--Formulario-->
        <div>
            <h5>Modificar Catequista</h5>
            <form action="control.php" method="POST" accept-charset="utf-8">
                <div class="row">
                    <!--ID-->
                    <div>
                        <input type="text" name="id" value="<?php echo $id_catequistas ?>" placeholder="">
                        <label for="Id">ID</label>
                    </div>
                    <!--Nombres-->
                    <div>
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" value="<?php echo $nombres ?>" placeholder="" >
                    </div>
                    <!--Apellidos-->
                    <div>
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" value="<?php echo $apellidos ?>" placeholder="">
                    </div>
                    <!--Cedula-->
                    <div>
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" value="<?php echo $cedula ?>" placeholder="">
                    </div>
                    <!--Fecha de Nacimiento-->
                    <div>
                        <label for="fechaNacimiento">Fecha Nacimiento</label>
                        <input type="date" name="fechaNacimiento" value="<?php echo $fechaNacimiento ?>" placeholder="">
                    </div>
                    <!--Nivel en el que enseña-
                    <div>
                        <label for="nivel">Nivel</label>
                        <select name="nivel"  id="nivel">
                            <option value="1">Bautismo </option>
                            <option value="2" >Primero de comunión</option>
                            <option value="3">Segundo de comunión</option>
                            <option value="4">Primero de confirmación</option>
                            <option value="5">Segundo de comunión</option>
                            <option value="6">Catequesis especial</option>
                        </select>
                    </div>
                    -->
                    <!--Direccion Domicioliaria-->
                    <div>
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" value="<?php echo $direccion ?>" placeholder="">
                    </div>
                    <!--Teléfono-->
                    <div>
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" value="<?php echo $telefono ?>" placeholder="" >
                    </div>
                    <!--Celular-->
                    <div>
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" value="<?php echo $celular ?>" placeholder="" >
                    </div>
                    <!--Correo-->
                    <div>
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" value="<?php echo $correo ?>" placeholder="">
                    </div>
                    <!--Facebook-->
                    <div>
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" value="<?php echo $facebook ?>" placeholder="">
                    </div>
                    <!--Estado Civil-->
                    <div>
                        <label for="estadoCivil">Estado Civil</label>
                        <input type="text" name="estadoCivil" value="<?php echo $estadoCivil ?>" placeholder="">
                    </div>
                    <!--Profesión-->
                    <div>
                        <label for="profesion">Profesión</label>
                        <input type="text" name="profesion" value="<?php echo $profesion ?>" placeholder="">
                    </div>
                    <!--Alergia-->
                    <div>
                        <label for="alergia">Alergia</label>
                        <input type="text" name="alergias" value="<?php echo $alergia ?>" placeholder="">
                    </div>
                    <!--Tipo de sangre-->
                    <div>
                        <label for="grupoSanguineo">Tipo de Sangre</label>
                        <input type="text" name="grupoSanguineo" value="<?php echo $grupoSanguineo ?>" placeholder="">
                    </div>
                    <!--Fecha de Catequización-->
                    <div>
                        <label for="catequistaDesdes">Catqeusita desde</label>
                        <input type="date" name="catequistaDesdes" value="<?php echo $catequistaDesde ?>" placeholder="">
                    </div>
                </div>

                <!--Botón-->
                <div class="row">
                    <div>
                        <button type="submit" name="modificar">Editar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
