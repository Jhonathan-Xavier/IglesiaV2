<?php
include ("../conexion/conexion.php");
date_default_timezone_set("America/Guayaquil");
$fecha_actual = date("Y-m-d H:i");
@$id_catequisado=$_GET['id'];

$consulta="SELECT * FROM catequizados WHERE id_catequisado='$id_catequisado'";
$ejecutar=mysqli_query($conexion, $consulta);


while ($row=mysqli_fetch_array($ejecutar)){

    $id_catequisado = $row[0];
    $nombres=$row[1];
    $apellidos=$row[2];
    $fecha_nacimiento=$row[3];
    $edad = $row[4];
    $direccion=$row[5];
    $telefono=$row[6];
    $celular=$row[7];
    $mail=$row[8];
    $grupo_sanguineo=$row[9];
    $alergias=$row[10];
    $fortalezas = $row[11];
    $nombre_papa= $row[12];
    $oficio_papa= $row[13];
    $telefono_papa= $row[14];
    $nombre_mama= $row[15];
    $oficio_mama= $row[16];
    $telefono_mama= $row[17];
    $allegado= $row[18];
    $contacto_emergencia= $row[19];
    $telefono_emergencia= $row[20];
    $parentezco= $row[21];
    $observacion= $row[22];

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
                        <input type="text" name="id_catequisado" value="<?php echo $id_catequisado ?>" placeholder="">
                        <labe
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
                    <!--Fecha de Nacimiento-->
                    <div>
                        <label for="fecha_nacimiento">Fecha Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>" placeholder="">
                    </div>
                    <!--Edad-->
                    <div>
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" value="<?php echo $edad ?>" placeholder="">
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
                    <!--Mail-->
                    <div>
                        <label for="mail">Mail</label>
                        <input type="email" name="mail" value="<?php echo $mail ?>" placeholder="">
                    </div>
                    <!--Tipo de sangre-->
                    <div>
                        <label for="grupo_sanguineo">Tipo de Sangre</label>
                        <input type="text" name="grupo_sanguineo" value="<?php echo $grupo_sanguineo ?>" placeholder="">
                    </div>
                    <!--Alergia-->
                    <div>
                        <label for="alergias">Alergia</label>
                        <input type="text" name="alergias" value="<?php echo $alergias ?>" placeholder="">
                    </div>
                    <!--Fortaleza-->
                    <div>
                        <label for="fortalezas">Fortalezas</label>
                        <input type="text" name="fortalezas" value="<?php echo $fortalezas ?>" placeholder="">
                    </div>
                    <!--Papá-->
                    <!--Nombre-->
                    <div>
                        <label for="nombre_papa">Nombre Padre</label>
                        <input type="text" name="nombre_papa" value="<?php echo $nombre_papa ?>" placeholder="">
                    </div>
                    <!--Oficio Papá-->
                    <div>
                        <label for="oficio_papa">Oficio Padre</label>
                        <input type="text" name="oficio_papa" value="<?php echo $oficio_papa ?>" placeholder="">
                    </div>
                    <!--Teléfono Papá-->
                    <div>
                        <label for="telefono_papa">Telefono Padre</label>
                        <input type="text" name="telefono_papa" value="<?php echo $telefono_papa ?>" placeholder="" >
                    </div>
                    <!--Mamá-->
                    <!--Nombre-->
                    <div>
                        <label for="nombre_mama">Nombre Madre</label>
                        <input type="text" name="nombre_mama" value="<?php echo $nombre_mama ?>" placeholder="">
                    </div>
                    <!--Oficio Mamá-->
                    <div>
                        <label for="oficio_mama">Oficio Madre</label>
                        <input type="text" name="oficio_mama" value="<?php echo $oficio_mama ?>" placeholder="">
                    </div>
                    <!--Teléfono Mamá-->
                    <div>
                        <label for="telefono_mama">Telefono Madre</label>
                        <input type="text" name="telefono_mama" value="<?php echo $telefono_mama ?>" placeholder="" >
                    </div>
                    <!--Allegado-->
                    <div>
                        <label for="allegado">Vive con</label>
                        <input type="text" name="allegado" value="<?php echo $allegado ?>" placeholder="" >
                    </div>

                    <!--Contacto Emergencia-->
                    <!--Nombre-->
                    <div>
                        <label for="contacto_emergencia">Contacto</label>
                        <input type="text" name="contacto_emergencia" value="<?php echo $contacto_emergencia ?>" placeholder="" >
                    </div>
                    <!--Teléfono Emergencia-->
                    <div>
                        <label for="telefono_emergencia">Telefono Emergencia</label>
                        <input type="text" name="telefono_emergencia" value="<?php echo $telefono_emergencia ?>" placeholder="" >
                    </div>
                    <!--Parentezco-->
                    <div>
                        <label for="parentezco">Parentezco</label>
                        <input type="text" name="parentezco" value="<?php echo $parentezco ?>" placeholder="">
                    </div>
                    <!--Observacion-->
                    <div>
                        <label for="observacion">Observacion</label>
                        <input type="text" name="observacion" value="<?php echo $observacion ?>" placeholder="">
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
