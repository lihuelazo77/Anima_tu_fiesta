<?php
include('../conexion/conexion.php');

if($_POST) {
session_start();
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	$query = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre = '$nombre' AND contrasena = '$contrasena'");
	
	$contar = mysqli_num_rows($query);
	if ($contar != 0) {
		while($row=mysqli_fetch_array($query)) {
			echo $row;
			if($nombre == $row['nombre'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['nombre'] = $nombre;
				
				$_SESSION['id'] = $row['id'];
			
				echo "<script>
				window.location.href = '../../index.php';
			</script>";
			}
		} 
		
	} else { echo "El nombre de nombre y/o contrasena no coinciden"; }
}
?>