<?php
include ("conexion.php");
session_start();
$id = $_POST['id']; 

$SQL1 = "SELECT * FROM usuario WHERE id = $id";
$registros = mysqli_query($conexion, $SQL1) or die("Problemas en la consulta");

if ($registro = mysqli_fetch_array($registros)) {
    ?>
    <form action="modUsuario.php" method="get">
    
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        Ingrese los nuevos datos:
        <br>id: <?php echo $registro['id']; ?>

        <br>Nombre: <input type="text" name="nuevo_nombre" placeholder="<?php echo $registro[1]; ?>">
        <br>Apellido: <input type="text" name="nuevo_apellido" placeholder="<?php echo $registro[2]; ?>">
        <br>Telefono: <input type="text" name="nuevo_telefono" placeholder="<?php echo $registro[3]; ?>">
        <br>Correo: <input type="text" name="nuevo_email" placeholder="<?php echo $registro[3]; ?>">
        <br>Domicilio: <input type="text" name="nuevo_domicilio" placeholder="<?php echo $registro[3]; ?>">
        <br><input type="submit" name="enviar" value="Modificar">
    </form>
    <?php
} else {
    echo "No se encontró un registro con ese id.";
}
?>
