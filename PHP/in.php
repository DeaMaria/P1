<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="estilosIndex.css">
  <title>index.php</title>
 </head>
 <body>
<form name="datos" method="post" action="login.php">
<table align="center" width="40%">
	<tr><td>Nombre de usuario</td>
		<td><input type="text" name="usuario" id="usuario" maxlength="10" required="yes"></input></td>
	</tr>
	<tr><td>Clave</td>
		<td><input type="password" name="clave" id="clave" maxlength="10" required="yes"></td>
			
	</tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Entrar"><input type="button" value="Registrarse" onclick="window.open('registrar.php')"></td></tr>
</table>
</form>
  
 </body>
</html>