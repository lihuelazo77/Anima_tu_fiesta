
<?php
session_start();
include ('../conexion/conexion.php'); 
include('../validar.php');
if (isset($_POST['enviar'])) {
    
$id = $_POST['id'];
$nombre=$_POST["nuevo_nombre"];
$apellido=$_POST["nuevo_apellido"];
$telefono=$_POST["nuevo_telefono"];
$correo=$_POST["nuevo_correo"];
$domicilio=$_POST["nuevo_domicilio"];

$error="";

$error=validar_nombre($nombre,$error); 
$error=validar_apellido($apellido,$error);
$error=validar_telefono($telefono,$error);
$error=validar_correo($correo,$error);
$error=validar_domicilio($domicilio,$error);

echo $error; 
if($error==""){

$sql2=("UPDATE usuario SET nombre='$nombre',apellido='$apellido',telefono='$telefono',correo='$correo',domicilio='$domicilio' where id=$id");
mysqli_query($conexion,$sql2)or die('problemas en la conexion');
echo "datos modificados";}

}?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil de Usuario - Anima Tu Fiesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .perfil-card {
      max-width: 400px;
      margin: 60px auto;
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 2rem;
      text-align: center;
    }
    .perfil-foto {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #0d6efd;
      margin-bottom: 1rem;
    }
    .perfil-info p {
      margin-bottom: 0.6rem;
      text-align: left;
    }
    .perfil-info strong {
      color: #0d6efd;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="perfil-card">
      <img src="../../IMG/animadores.jpg" alt="Foto de perfil" class="perfil-foto">
      
      <h4 class="fw-bold text-primary"><?php $_SESSION['nombre'] $_SESSION['apellido']?></h4>
      <input type="text">
      <p class="mb-2"><strong>Calificación:</strong> 8.7</p>

      <div class="perfil-info mt-3">
        <p><strong>Correo:</strong> <?php $_SESSION['correo'] ?></p>
        <p><strong>Domicilio:</strong> <?php $_SESSION['domicilio'] ?></p>
        <p><strong>Teléfono:</strong> <?php $_SESSION['telefono'] ?></p>
        <p><strong>Contratos realizados:</strong> 125</p>
      </div>
      
      <div class="mt-4">
        <button class="btn btn-outline-primary w-100">Editar perfil</button>
      </div>
      <div class="mt-3"><a href="../../PHP/trabajador/formulario_trabajador.php">
        <button class="btn btn-outline-primary w-100">Ofrecer servicios</button></a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
