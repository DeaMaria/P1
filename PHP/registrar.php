<!doctype html>
<html lang="en">
 <head>
  <title>Registrar</title>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="estilosRegistro.css">
  <script language="JavaScript">
	function comprobar(valor) {
    if (valor.length == 0) {
        document.getElementById("texto").innerHTML = "Debe introducir un usuario";
         return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("texto").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "chequear.php?q=" + valor, true);
        xmlhttp.send();
    }
}
  </script>
 </head>
 <body>
  <form name="datos" method="post" action="insertarRegistro.php">
<table class="tabla" align="center" width="60%">
	
	<tr><td>Usuario</td>
		<td><input name="usuario" id="usuario" cols="10" rows="1" required="yes"placeholder="Introduce el usuario" size="10" onblur="comprobar(usuario.value)"><span id="texto"></span></td>
	</tr>
	<tr><td>Clave</td>
		<td><input type="password" name="clave" id="clave" cols="10" rows="1" required="yes"></td>
			
	</tr>
	<tr><td>Nombre Completo</td>
		<td><input name="nombre" id="nombre" cols="30" rows="1" required="yes"></input></td>
	</tr>
	
	<tr><td>Fecha nacimiento</td>
		<td><input type="date" name="fecha" id="fecha" required="yes"></input></td>
	</tr>
	<tr><td>Email</td>
		<td><input type="email" id="email" name="email" size="20" maxlength="60" value="" required="yes"></td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center">   </td>
	</tr>
	<tr><td colspan="2" align="center"><button type="submit">Continuar</button></td>
	</tr>
	
	
 </body>
</html>

