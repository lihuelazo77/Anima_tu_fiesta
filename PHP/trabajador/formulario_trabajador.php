<?php
session_start();
include('../conexion/conexion.php');
if (isset($_POST['enviar'])) {
  $id=$_SESSION["id"];
  $nombre_artistico=$_POST["nombre_artistico"];
  $oficio=$_POST["oficio"];
  $ciudad=$_POST["ciudad"];
    $sql = "INSERT INTO trabajador VALUES ('$id', '$nombre_artistico', '$oficio', '$ciudad')";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    echo "PIÑATAAAAAA";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Anima Tu Fiesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #f4653a, #ff9a6e); /* Fondo degradado en diagonal */
      min-height: 100vh;  /* Altura mínima que cubre toda la pantalla */
      display: flex;      /* Activa flexbox para organización */
      flex-direction: column; /* Dirección vertical (de arriba hacia abajo) */
    }

    .login-container {
      background: #fff;                /* Fondo blanco para contraste */
      border-radius: 1rem;             /* Bordes redondeados para suavidad */
      padding: 2.5rem;                 /* Espacio interno cómodo */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Sombra para profundidad */
      width: 100%;                     /* Toma todo el ancho disponible */
      max-width: 400px;                /* Limita el ancho para estética */
      margin: 50px auto;               /* Centrado horizontal y margen superior */
    }

    .login-title {
      font-weight: bold;              /* Título en negrita */
      margin-bottom: 1.5rem;          /* Espacio inferior */
      color: #f4623a;                 /* Color del branding */
    }

    .form-control:focus {
      border-color: #f4623a;          /* Borde naranja al enfocar input */
      box-shadow: 0 0 0 0.2rem rgba(244, 98, 58, 0.25); /* Sombra suave */
    }

    .btn-login {
      background-color: #f4623a;      /* Fondo naranja en botón */
      color: #fff;                    /* Texto blanco */
    }

    .btn-login:hover {
      background-color: #e04c25;      /* Más oscuro al pasar el mouse */
    }

    footer {
      margin-top: auto;               /* Mantiene el footer en el fondo */
    }
    /* === Estilos del botón circular de perfil === */
    .perfil-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #ffffff33;
      transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .perfil-btn:hover {
      transform: scale(1.05);
      background-color: #ffffff55;
    }

    .perfil-btn img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Ajuste del header */
    .header-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .menu-container {
      display: flex;
      align-items: center;
      gap: 1rem;
    }
  </style>
</head>
<body class="d-flex flex-column">

<!-- Header con icono en el medio y texto a la izquierda -->
  <header class="bg-primary text-white py-2 sticky-top">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <!-- Título a la izquierda -->
        <div class="col-4 d-flex justify-content-start align-items-center">
          <h1 class="mb-0 fw-bold">Anima Tu Fiesta</h1>
        </div>

        <!-- Icono centrado -->
        <div class="col-4 d-flex justify-content-center">
          <img src="../../IMG/Icono_header_ATF.png" class="img-fluid" style="max-width: 100px;" alt="Icono">
        </div>

        <!-- Menú y perfil a la derecha -->
        <div class="col-4 d-flex justify-content-end align-items-center gap-2">
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Menú
            </button>
            <ul class="dropdown-menu dropdown-menu-end text-center">
              <li><a class="dropdown-item" href="../../index.php">Inicio</a></li>
              <li><a class="dropdown-item" href="../../HTML/eventos/carrito/carrito.html">Carrito</a></li>
              <li><a class="dropdown-item" href="../../PHP/trabajador/formulario_trabajador.php">Registrate como trabajador</a></li>
            </ul>
          </div>

          <!-- Botón circular de perfil -->
          <div class="dropdown d-flex">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
            <a href="./HTML/cliente/perfil_cliente.html" class="d-inline-block rounded-circle overflow-hidden border border-light" style="width: 45px; height: 45px;">
              <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="img-fluid" alt="Perfil">
          </a>  
        </button>
        <?php
        if (isset($_SESSION['id'])) {
        ?>  <p class="usuario ">Hola, <?php echo $_SESSION['nombre']; ?></p><?php
}
?>
            <ul class="dropdown-menu dropdown-menu-end text-center">
              <li><a class="dropdown-item" href="../../HTML/cliente/perfil_cliente.html">Ver perfil</a></li>
              <li><a class="dropdown-item" href="../../HTML/cliente/login.html">Iniciar sesion</a></li>
              <li><a class="dropdown-item text-danger" href="#">Cerrar sesion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Formulario de Login -->
  <main class="flex-grow-1">
    <div class="login-container text-center">
      <h2 class="login-title">Registrarse como trabajador</h2>
      <form action="../../PHP/cliente/login.php" method="POST"> <!-- Envía a PHP -->
        <div class="campo mb-3 text-start">
          <label for="nombre_artistico" class="form-label">Nombre artistico</label>
          <input type="text" class="form-control" id="nombre_artistico" name="nombre_artistico" required /> <!-- Campo correo -->
        </div>
        <div class="campo mb-3 text-start">
          <label for="oficio" class="form-label">Oficio</label>
          <input type="text" class="form-control" id="oficio" name="oficio" required /> <!-- Campo teléfono -->
        </div>
        <div class="campo mb-3 text-start">
          <label for="ciudad" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad" required /> <!-- Campo teléfono -->
        </div>
        <button type="submit" name="enviar" class="btn btn-login w-100 mt-3">Entrar</button> <!-- Botón -->
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-4 mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>Contacto</h5>
          <p>Email: animatufiesta8@gmail.com<br>Tel: +54 11 5922 9324</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Redes Sociales</h5>
          <a href="https://www.facebook.com/profile.php?id=61578214285733&sk=about" class="text-white me-2">Facebook</a>
          <a href="https://www.instagram.com/animatufiesta/" class="text-white me-2">Instagram</a>
          <a href="https://www.tiktok.com/@animatufiesta8?lang=es" class="text-white">TikTok</a>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Legal</h5>
          <a href="../../HTML/politica_privacidad/politica_privacidad.html"  class="text-white d-block">Política de privacidad</a>
          <a href="../../HTML/politica_privacidad/terminos_condiciones.html" class="text-white d-block">Términos y condiciones</a>
        </div>
      </div>
      <hr class="border-light" />
      <p class="mb-0">&copy; 2025 Anima Tu Fiesta. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
