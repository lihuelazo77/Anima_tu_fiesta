<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>TABLAS</title>
</head>
<body bgcolor=#C0F5E4>
    <!-- tabla usuario -->
    <h1>Tablas</h1>
    <table border='1'>
        <tr> <br><h3>Usuarios</h3></tr>
    <tr>   
            <td>id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Domicilio</td>
        </tr>
        <?php
                include('conexion.php');
         $sql="SELECT * FROM usuario";
         $registros=mysqli_query($conexion,$sql);
         while($array=mysqli_fetch_array($registros)){
        ?>
        <tr>
            <td><?php echo $array['id']?></td>
            <td><?php echo $array['nombre']?></td>
            <td><?php echo $array['apellido']?></td>
            <td><?php echo $array['telefono']?></td>
            <td><?php echo $array['correo']?></td>
            <td><?php echo $array['domicilio']?></td>
        </tr>
         <?php } ?>
