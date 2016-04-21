<?php
$us=$_GET['q'];

include("conectarDB.php");

$sql="SELECT * FROM usuarios WHERE usuario='$us'";

$registros=mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
$numero=mysqli_num_rows($registros);
if($numero!=0){
	echo "Usuario Duplicado";
}
else 
	echo "Usuario Correcto";

mysqli_close($conexion);

?>