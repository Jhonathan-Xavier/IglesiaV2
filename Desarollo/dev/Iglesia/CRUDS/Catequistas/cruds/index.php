<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catqeusita</title>
</head>
<body>

<div class="row" style="text-align: center;">
    <h2> Parroquia San Ignacio de Loyola </h2>
    <h3> Ficha del Catequista </h3>
</div>

<div class="row" style="text-align: center;">
    <!--Formulario-->
    <div>

        <h5>Registro alumno</h5>
        <form action="control.php" method="POST" accept-charset="utf-8">
            <div class="row">
                <!--Nombres-->
                <div>
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" value="" placeholder="" >
                </div>
                <!--Apellidos-->
                <div>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" value="" placeholder="">
                </div>
                <!--Cedula-->
                <div>
                    <label for="cedula">Cédula</label>
                    <input type="text" name="cedula" value="" placeholder="">
                </div>
                <!--Fecha de Nacimiento-->
                <div>
                    <label for="fechaNacimiento">Fecha Nacimiento</label>
                    <input type="date" name="fechaNacimiento" value="" placeholder="">
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
                ->
                <!--Direccion Domicioliaria-->
                <div>
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" value="" placeholder="">
                </div>
                <!--Teléfono-->
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" value="" placeholder="" >
                </div>
                <!--Celular-->
                <div>
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" value="" placeholder="" >
                </div>
                <!--Correo-->
                <div>
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" value="" placeholder="">
                </div>
                <!--Facebook-->
                <div>
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" value="" placeholder="">
                </div>
                <!--Estado Civil-->
                <div>
                    <label for="estadoCivil">Estado Civil</label>
                    <input type="text" name="estadoCivil" value="" placeholder="">
                </div>
                <!--Profesión-->
                <div>
                    <label for="profesion">Profesión</label>
                    <input type="text" name="profesion" value="" placeholder="">
                </div>
                <!--Alergia-->
                <div>
                    <label for="alergia">Alergia</label>
                    <input type="text" name="alergias" value="" placeholder="">
                </div>
                <!--Tipo de sangre-->
                <div>
                    <label for="grupoSanguineo">Tipo de Sangre</label>
                    <input type="text" name="grupoSanguineo" value="" placeholder="">
                </div>
                <!--Fecha de Catequización-->
                <div>
                    <label for="catequistaDesdes">Catqeusita desde</label>
                    <input type="date" name="catequistaDesdes" value="" placeholder="">
                </div>
            </div>

            <!--Botón-->
            <div class="row">
                <div>
                    <button type="submit" name="guardar">Guardar</button>
                </div>
            </div>

        </form>
    </div>
</div>

</body>
</html>
