<html>
<head>
</head>
<body>
<center>
<h2> Parroquia San Ignacio de Loyola </h2>
<h3> Ficha del Instructor</h3>
</center>

<form name="formulario2" method="post" action="conexion.php">
<center>
<table>
<tr>
<th align="left">Nombres:</th> <th><input type="text" name="nombreinstructor" value=""></th>
</tr>
<tr>
<th align="left">Apellidos:</th> <th><input type="text" name="apellidoinstructor" value=""></th>
</tr>
<tr>
<th align="left">C.I</th> <th><input type="text" name="cedulainstructor" value=""></th>
</tr>

<tr>
<th align="left" > Fecha de nacimiento </th> 
<th align="left" >  <input type="date" name="nacimientoinstructor" id="nacimientoinstructor" > 
</th>                       
</tr>
<tr>
<th align="left" > Nivel </th>
<th align="left"> <select name="cursoinstructor" id="cursoinstructor" > 
<option > Ingles </option>
<option >Matematicas</option>
</select>

</tr>
<tr>
<th align="left"> Dirección domiciliara </th>
<th colspan="2" > <input type="text" name="direinstructor" id="direinstructor" size="56">
</tr>
<tr>
<th align="left" > Teléfono </th> 
<th align="left" style="width:50px">  <input name="telefonoinstructor" type="text" id="telefonoinstructor" > </th>                       
<th>  Celular <input type="text" name="celularinstructor" id="celularinstructor" > 
</th>                       
</tr>

<tr>
<th align="left"> Correo electrónico </th> 
<th>  <input type="text" name="correoinstructor" id="correoinstructor"> </th>                       
</tr>

<tr>
<th  align="left"> Facebook </th> 
<th>  <input type="text" name="facebookinstructor" id="facebookinstructor"> </th>                       
</tr>

<tr>
<th align="left"> Estado Civil </th> 
<th style= "width:50px" align="left">  <select name="estadocinstructor" > 
<option > Casado </option> 
<option > Divorciado </option> 
<option >  Soltero </option> 
<option > Viudo </option> 
</select>
</th>     
</tr>
<tr>
<th align="left"> Profesión  </th> 
<th>  <input type="text" name="profinstructor" id="profinstructor"> </th>                       
</tr>
<tr>
<th align="left"> Alergías  </th> 
<th>  <input type="text" name="alerginstructor" id="alerginstructor"> </th>                       
</tr>

<tr>
<th  align="left"> Tipo de Sangre </th> 
<th>  <input type="text" name="tiposangreinstructor" id="tiposangreinstructor"> </th>                       
</tr>

<tr>
<th align="left"> Instructor desde </th> 
<th>  <input type="date" name="fechaingresoinstructor"  min="2000-01-01"> </th>                       
</tr>

<tr>
<br>
<tr>
<tr>
<th><input type="submit" name="Aceptar" value="Aceptar"/> </th>
<th><input type="reset" name="Cancelar" value="Cancelar"/></th>
</tr>


</table>
</center>

</form> 

</body>
</html>
