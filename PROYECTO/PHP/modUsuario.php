<?php
include ("conexion.php");
 
include('validar.php');

$id = $_GET['id'];
$nombre=$_REQUEST["nuevo_nombre"];
$apellido=$_REQUEST["nuevo_apellido"];
$telefono=$_REQUEST["nuevo_telefono"];
$email=$_REQUEST["nuevo_email"];
$domicilio=$_REQUEST["nuevo_domicilio"];
$error="";

$error=validar_nombre($nombre,$error);
$error=validar_apellido($apellido,$error);
$error=validar_telefono($telefono,$error);
$error=validar_email($email,$error);
$error=validar_domicilio($domicilio,$error);

echo $error; 
if($error==""){

$sql2=("UPDATE usuario SET nombre='$nombre',apellido='$apellido',telefono='$telefono',correo='$email',domicilio='$domicilio' where id=$id");
mysqli_query($conexion,$sql2)or die('problemas en la conexion');
echo "datos modificados";}
?>