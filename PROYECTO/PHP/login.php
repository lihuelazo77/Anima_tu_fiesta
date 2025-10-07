<?php
if($_POST['enviar']) {
session_start();
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	
	$query = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
	
	$contar = mysql_num_rows($query);
	
	if ($contar != 0) {
	
		while($row=mysql_fetch_array($query)) {
		
			if($usuario == $row['usuario'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['usuario'] = $usuario;
				
				$_SESSION['id'] = $row['id'];
			
    echo "<script>
    alert('Se registró correctamente');
    window.location.href = '../index.html';
</script>";
			}
			
		} 
		
	} else { echo "El nombre de usuario y/o contrasena no coinciden"; }
}
?>