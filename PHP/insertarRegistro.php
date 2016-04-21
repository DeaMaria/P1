<?php
$us=$_POST['usuario'];
$cl=MD5($_POST['clave']);
$nom=$_POST['nombre'];
$fec=$_POST['fecha'];
$em=$_POST['email'];

include("conectarDB.php");


$sql="SELECT usuario FROM usuarios WHERE usuario='$us'";


$reg=mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
if(mysqli_num_rows($reg)>0){
	?><script language='JavaScript'>
			alert('Este nombre de usuario ya existe');
			window.location.href='registrar.php';
			</script>
			<?php
}
else{
	$sql="INSERT INTO usuarios(usuario, clave, nombre, fechaNacimiento, email) VALUES('$us','$cl','$nom', '$fec','$em')";
	mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
	
}
mysqli_close($conexion);
header("location:registrar.php");

?>