<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catequisado</title>
</head>
<body>

<div class="row" style="text-align: center;">
    <h2> Parroquia San Ignacio de Loyola </h2>
    <h3> Ficha del Catequisado </h3>
</div>

<div class="row" style="text-align: center;">
    <!--Formulario-->
    <div>

        <h5>Registro</h5>
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
                <!--Fecha de Nacimiento-->
                <div>
                    <label for="fecha_nacimiento">Fecha Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" value="" placeholder="">
                </div>
                <!--Edad-->
                <div>
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" value="" placeholder="">
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
                <!--Mail-->
                <div>
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" value="" placeholder="">
                </div>
                <!--Tipo de sangre-->
                <div>
                    <label for="grupo_sanguineo">Tipo de Sangre</label>
                    <input type="text" name="grupo_sanguineo" value="" placeholder="">
                </div>
                <!--Alergia-->
                <div>
                    <label for="alergias">Alergia</label>
                    <input type="text" name="alergias" value="" placeholder="">
                </div>
                <!--Fortaleza-->
                <div>
                    <label for="fortalezas">Fortalezas</label>
                    <input type="text" name="fortalezas" value="" placeholder="">
                </div>
                <!--Papá-->
                <!--Nombre-->
                <div>
                    <label for="nombre_papa">Nombre Padre</label>
                    <input type="text" name="nombre_papa" value="" placeholder="">
                </div>
                <!--Oficio Papá-->
                <div>
                    <label for="oficio_papa">Oficio Padre</label>
                    <input type="text" name="oficio_papa" value="" placeholder="">
                </div>
                <!--Teléfono Papá-->
                <div>
                    <label for="telefono_papa">Telefono Padre</label>
                    <input type="text" name="telefono_papa" value="" placeholder="" >
                </div>
                <!--Mamá-->
                <!--Nombre-->
                <div>
                    <label for="nombre_mama">Nombre Madre</label>
                    <input type="text" name="nombre_mama" value="" placeholder="">
                </div>
                <!--Oficio Mamá-->
                <div>
                    <label for="oficio_mama">Oficio Madre</label>
                    <input type="text" name="oficio_mama" value="" placeholder="">
                </div>
                <!--Teléfono Mamá-->
                <div>
                    <label for="telefono_mama">Telefono Madre</label>
                    <input type="text" name="telefono_mama" value="" placeholder="" >
                </div>
                <!--Allegado-->
                <div>
                    <label for="allegado">Vive con</label>
                    <input type="text" name="allegado" value="" placeholder="" >
                </div>

                <!--Contacto Emergencia-->
                <!--Nombre-->
                <div>
                    <label for="contacto_emergencia">Contacto</label>
                    <input type="text" name="contacto_emergencia" value="" placeholder="" >
                </div>
                <!--Teléfono Emergencia-->
                <div>
                    <label for="telefono_emergencia">Telefono Emergencia</label>
                    <input type="text" name="telefono_emergencia" value="" placeholder="" >
                </div>
                <!--Parentezco-->
                <div>
                    <label for="parentezco">Parentezco</label>
                    <input type="text" name="parentezco" value="" placeholder="">
                </div>
                <!--Observacion-->
                <div>
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" value="" placeholder="">
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
