<?php
include('conexion.php');
include('validar.php');

$nombre = trim($_POST["nombre"]);
$apellido = trim($_POST["apellido"]);
$telefono = trim($_POST["telefono"]);
$correo = trim($_POST["correo"]);
$domicilio = trim($_POST["domicilio"]);
$contrasena = trim($_POST["contrasena"]);
$confirmar = trim($_POST["confirmar"]);


$error = validar_nombre($nombre, $error);
$error = validar_apellido($apellido, $error);
$error = validar_telefono($telefono, $error);
$error = validar_correo($correo, $error);
$error = validar_domicilio($domicilio, $error);
$error = validar_contrasena($contrasena, $error);
$error = validar_confirmar($confirmar, $contrasena, $error);

echo $error;

if ($error == "") {
    $sql = "INSERT INTO usuario VALUES (0, '$nombre', '$apellido', '$telefono', '$correo', '$domicilio', '$contrasena')";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);

    echo "<script>
    alert('Se registró correctamente');
    window.location.href = '../index.php';
</script>";
}
?>
