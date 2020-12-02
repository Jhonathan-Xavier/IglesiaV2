<?php

include ("../conexion/conexion.php");
date_default_timezone_set("America/Guayaquil");
$fecha_actual = date("Y-m-d H:i");
@$id_catequisado=$_GET['id_catequisado'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Catquista</title>

</head>
<body>
    <div class="row">
        <!--Tabla-->
        <div class="col 17 offset-l5" style="position: absolute; top: 15%">
            <table>
                <h5>Lista catequistas</h5>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th></th>
                </tr>
                </thead>

                <?php
                include ("../conexion/conexion.php");
                $sql="SELECT * FROM catequizados";
                $ejecutar=mysqli_query($conexion, $sql);

                while($fila=mysqli_fetch_array($ejecutar)){

                ?>
                    <tbody>
                    <tr>
                        <td><?php echo $fila[0]; ?></td>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[6]; ?></td>
                        <td><?php echo $fila[8]; ?></td>
                        <td><?php echo $fila[5]; ?></td>
                        <td><a href="modificar.php?id=<?php echo $fila[0]; ?>">Editar</td>

                    </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
