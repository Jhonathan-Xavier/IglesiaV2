<?php

include ("../conexion/conexion.php");
date_default_timezone_set("America/Guayaquil");
$fecha_actual = date("Y-m-d H:i");
@$id_alumnos=$_GET['id'];


$consulta="SELECT * FROM alumnos WHERE id='$id_alumnos'";
$ejecutar=mysqli_query($conexion, $consulta);

while ($row=mysqli_fetch_array($ejecutar)){

    $id_alumnos = $row[0];
    $cedula = $row[1];
    $nombres = $row[2];
    $apellidos= $row[3];
    $fechaNacimiento= $row[4];
    $correo= $row[5];
    $profesion = $row[6];
    $alergia =  $row[7];
    $grupoSanguineo = $row[8];
    $facebook = $row[9];
    $direccion = $row[10];
    $telefono = $row[11];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Alumno</title>

    <script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
    <script src="../librerias/materialize/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            id=$("#id_alumnos").val();
            if(id>0){
                $("#form_register").hide();
            }else{
                $("#form_update").hide();
            }

        });
    </script>

    <link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css">


</head>
<body>

<input type="hidden" name="id_alumnos" id="id_alumnos" value="<?php echo $id_alumnos; ?>">

<div class="row">
    <!--Formulario-->
    <div class="col 12" style="position: absolute; top: 15%" id="form_register">
        <h5 class="blue-text">Registro alumno</h5>
        <br>
        <br>
        <form action="control.php" method="POST" accept-charset="utf-8">
            <div class="row">
               <div class="input-field col l4">
                <input type="text" name="cedula" value="" placeholder="">
                <label for="Cedula">Cédula</label>
               </div>

                <div class="input-field col l4">
                    <input type="text" name="fecha" value="<?php echo $fecha_actual?>" placeholder="">
                    <label for="Fecha">Fecha Nacimiento</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l4">
                    <input type="text" name="nombre" value="" placeholder="">
                    <label for="Nombres">Nombres</label>
                </div>

                <div class="input-field col l4">
                    <input type="text" name="apellido" value="" placeholder="">
                    <label for="Apellidos">Apellidos</label>
                </div>

                <div class="input-field col l4">
                    <input type="text" name="profesion" value="" placeholder="">
                    <label for="Profesion">Profesion</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l3">
                    <input type="text" name="telefono" value="" placeholder="">
                    <label for="Telefono">Telefono</label>
                </div>

                <div class="input-field col l5">
                    <input type="text" name="mail" value="" placeholder="">
                    <label for="Email">E-mail</label>
                </div>
                <div class="input-field col l4">
                    <input type="text" name="facebook" value="" placeholder="">
                    <label for="Facebook">Facebook</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l12">
                    <input type="text" name="direccion" value="" placeholder="">
                    <label for="Direccion">Direccion</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l2">
                    <input type="text" name="sangre" value="" placeholder="">
                    <label for="Grupo Sanguineo">Sangre</label>
                </div>
                <div class="input-field col l6">
                    <input type="text" name="alergia" value="" placeholder="">
                    <label for="Alergia">Alergia</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field">
                    <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <!--Tabla-->
    <div class="col 17 offset-l5" style="position: absolute; top: 15%">
        <table>
            <h5 class="blue-text">Lista alumnos</h5>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Fecha-Nacimiento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th></th>
                </tr>
            </thead>

            <?php
                include ("../conexion/conexion.php");
                $sql="SELECT * FROM alumnos";
                $ejecutar=mysqli_query($conexion, $sql);

                while($fila=mysqli_fetch_array($ejecutar)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $fila[0]; ?></td>
                    <td><?php echo $fila[1]; ?></td>
                    <td><?php echo $fila[4]; ?></td>
                    <td><?php echo $fila[2]; ?></td>
                    <td><?php echo $fila[3]; ?></td>
                    <td><?php echo $fila[11]; ?></td>
                    <td><?php echo $fila[5]; ?></td>
                    <td><?php echo $fila[10]; ?></td>
                    <td><a href="index.php?id=<?php echo $fila[0]; ?>" class="btn btn-small">Editar</td>

                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>

</div>

    <!--Formulario Update-->
    <div class="col 12" style="position: absolute; top: 15%" id="form_update">
        <h5 class="blue-text">Editar Alumno</h5>
        <br>
        <br>
        <form action="control.php" method="POST" accept-charset="utf-8">
            <div class="row">
                <div class="input-field col l4">
                    <input type="text" name="id" value="<?php echo $id_alumnos ?>" placeholder="">
                    <label for="Id">ID</label>
                </div>
                <div class="input-field col l4">
                    <input type="text" name="cedula" value="<?php echo $cedula ?>" placeholder="">
                    <label for="Cedula">Cédula</label>
                </div>

                <div class="input-field col l4">
                    <input type="text" name="fecha" value="<?php echo $fechaNacimiento?>" placeholder="">
                    <label for="Fecha">Fecha Nacimiento</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l4">
                    <input type="text" name="nombre" value="<?php echo $nombres ?>" placeholder="">
                    <label for="Nombres">Nombres</label>
                </div>

                <div class="input-field col l4">
                    <input type="text" name="apellido" value="<?php echo $apellidos ?>" placeholder="">
                    <label for="Apellidos">Apellidos</label>
                </div>

                <div class="input-field col l4">
                    <input type="text" name="profesion" value="<?php echo $profesion ?>" placeholder="">
                    <label for="Profesion">Profesion</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l3">
                    <input type="text" name="telefono" value="<?php echo $telefono ?>" placeholder="">
                    <label for="Telefono">Telefono</label>
                </div>

                <div class="input-field col l5">
                    <input type="text" name="mail" value="<?php echo $correo ?>" placeholder="">
                    <label for="Email">E-mail</label>
                </div>
                <div class="input-field col l4">
                    <input type="text" name="facebook" value="<?php echo $facebook ?>" placeholder="">
                    <label for="Facebook">Facebook</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l12">
                    <input type="text" name="direccion" value="<?php echo $direccion ?>" placeholder="">
                    <label for="Direccion">Direccion</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l2">
                    <input type="text" name="sangre" value="<?php echo $grupoSanguineo ?>" placeholder="">
                    <label for="Grupo Sanguineo">Sangre</label>
                </div>
                <div class="input-field col l6">
                    <input type="text" name="alergia" value="<?php echo $alergia ?>" placeholder="">
                    <label for="Alergia">Alergia</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col l4">
                    <button type="submit" class="blue btn-small" name="btn_editar">Modificar</button>
                </div>
                <div class="input-field col l4">
                    <button type="submit" class="red accent-darken-4 btn-small" name="btn_eliminar">Eliminar</button>
                </div>
                <div class="input-field col l4">
                    <a href="index.php" class="blue btn-small" name="btn_cancelar">Cancelar</a>
                </div>


            </div>
        </form>
    </div>



</body>
</html>


?>