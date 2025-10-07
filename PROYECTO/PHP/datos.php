<?php 
include('conexion.php'); // tu conexión a la BD

// Traer todos los usuarios
$sql = "SELECT id, nombre, apellido, telefono, correo, domicilio FROM usuario";
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="bootstrap-5.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Usuarios Registrados</h3>
                    </div>
                    <div class="card-body">
                        <?php if (mysqli_num_rows($resultado) > 0) { ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered align-middle">
                                    <thead class="table-primary text-center">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th>Domicilio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $fila['id']; ?></td>
                                                <td><?php echo $fila['nombre']; ?></td>
                                                <td><?php echo $fila['apellido']; ?></td>
                                                <td><?php echo $fila['telefono']; ?></td>
                                                <td><?php echo $fila['correo']; ?></td>
                                                <td><?php echo $fila['domicilio']; ?></td>
                                                <td class="text-center">
                                                    <a href="editar_usuario.php?id=<?php echo $fila['id']; ?>" class="btn btn-sm btn-warning me-1" title="Editar">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="eliminar_usuario.php?id=<?php echo $fila['id']; ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-warning text-center" role="alert">
                                ⚠️ No hay usuarios registrados.
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
