<?php
session_start();
include 'db.php';

// Consulta de servicios ofrecidos con los datos del trabajador
$query = "
SELECT o.id_trabajador, o.oficio, o.nombre_servicio, o.precio,
       t.nombre_artistico, t.ciudad
FROM ofrece o
JOIN trabajador t ON o.id_trabajador = t.id_usuario AND o.oficio = t.oficio
";
$resultado = $conexion->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Anima Tu Fiesta - Servicios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
  <h1 class="text-center mb-4">🎉 Servicios Disponibles</h1>
  <div class="row">
    <?php while ($row = $resultado->fetch_assoc()) { ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $row['nombre_servicio']; ?></h5>
            <p><strong>Oficio:</strong> <?php echo $row['oficio']; ?></p>
            <p><strong>Trabajador:</strong> <?php echo $row['nombre_artistico']; ?></p>
            <p><strong>Ciudad:</strong> <?php echo $row['ciudad']; ?></p>
            <p><strong>Precio:</strong> $<?php echo $row['precio']; ?></p>
            <form action="agregar_carrito.php" method="POST">
              <input type="hidden" name="id_trabajador" value="<?php echo $row['id_trabajador']; ?>">
              <input type="hidden" name="oficio" value="<?php echo $row['oficio']; ?>">
              <input type="hidden" name="nombre_servicio" value="<?php echo $row['nombre_servicio']; ?>">
              <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
              <button class="btn btn-success">Agregar al carrito</button>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="text-center mt-4">
    <a href="ver_carrito.php" class="btn btn-primary">🛒 Ver Carrito</a>
  </div>
</div>
</body>
</html>
