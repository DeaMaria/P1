<?php
session_start();
$us=$_POST['usuario'];
$cl=MD5($_POST['clave']);

include("conectarDB.php");

$sql="SELECT * FROM usuarios WHERE usuario='$us'";

$reg=mysqli_query($conexion,$sql);
$total=mysqli_num_rows($reg);
if($total == 0)
	echo "Usuario no existe <a href='index.php'> Pulsa aquí para continuar </a>";
else{
	while($linea=mysqli_fetch_array($reg)){
		if($cl != $linea['clave'])
			echo "Clave incorrecta <a href='in.php'> Pulsa aquí para continuar </a>";
		else{
			$_SESSION['user']=$us;
			header("location:");
		}
	}

}


?>