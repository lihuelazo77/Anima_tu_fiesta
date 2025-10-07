<?php
include ("conexion.php");

$id=$_REQUEST["id"];
$sql="DELETE from usuario where id=$id";
mysqli_query($conexion,$sql) or die ("problemas en el select".mysqli.error($conexion));
mysqli_close($conexion);
echo "se borro";

?>