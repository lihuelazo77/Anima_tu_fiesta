<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anima Tu Fiesta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Estilo del contenedor de cada imagen */
    .galeria-item {
      position: relative; /* Permite posicionar el overlay dentro */
      overflow: hidden;   /* Oculta el contenido que sobresalga del borde */
      border-radius: 0.5rem; /* Bordes redondeados */
      transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transición suave al hacer hover */
    }

    /* Efecto al pasar el mouse por encima de la tarjeta */
    .galeria-item:hover {
      transform: scale(1.05); /* Agranda ligeramente */
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Sombra para dar profundidad */
    }

    /* Estilo de la imagen dentro de la tarjeta */
    .galeria-img {
      width: 100%;          /* Ancho completo del contenedor */
      height: 300px;        /* Altura fija */
      object-fit: cover;    /* Corta y ajusta la imagen sin deformarla */
      opacity: 0.7;         /* Hace la imagen semitransparente */
      transition: opacity 0.3s ease; /* Transición suave de opacidad */
    }

    /* Texto superpuesto sobre cada imagen */
    .overlay-text {
      position: absolute;   /* Posición absoluta dentro del contenedor */
      bottom: 0;
      left: 0;
      right: 0;
      top: 0; /* Ocupa toda el área */
      background: rgba(0, 0, 0, 0.4); /* Fondo negro translúcido */
      color: #fff;          /* Texto blanco */
      display: flex;        /* Flex para centrar */
      align-items: center;  /* Centrado vertical */
      justify-content: center; /* Centrado horizontal */
      font-size: 1.5rem;    /* Tamaño del texto */
      font-weight: bold;    /* Negrita */
      text-transform: uppercase; /* Todo en mayúsculas */
      pointer-events: none; /* Permite clics a través del overlay */
    }

    /* Al hacer hover sobre el contenedor, la imagen se hace más visible */
    .galeria-item:hover .galeria-img {
      opacity: 1;
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
<body class="d-flex flex-column min-dvh-100">

<!-- Header -->
  <!-- Header con título, menú y botón de perfil -->
  <header class="bg-primary text-white py-3">
    <div class="container header-flex">
      <h1 class="mb-0">Anima Tu Fiesta</h1>

      <div class="menu-container">
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Menu
          </button>
          <ul class="dropdown-menu text-center">
            <li><a class="dropdown-item" href="./index.php">Inicio</a></li>
            <li><a class="dropdown-item" href="./HTML/carrito.html">Carrito</a></li>
          </ul>
        </div>

        <!-- Botón circular de perfil -->
        <a href="./HTML/perfil_cliente.html" class="perfil-btn" title="Perfil">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Perfil">
        </a>
      </div>
    </div>
  </header>

<!-- Main Content -->
<main class="flex-grow-1">
  <div class="container my-5">
    <div class="row text-center mb-4">
      <h2 class="fw-bold">Galería de Eventos</h2>
    </div>
    <div class="row g-4">
      <!-- Imagen 1 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/animadores.html">
          <div class="galeria-item">
            <img src="IMG/animadores/animador.jpg" class="galeria-img" alt="Animadores">
            <div class="overlay-text">Animadores</div>
          </div>
        </a>
      </div>
      <!-- Imagen 2 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/catering.html">
          <div class="galeria-item">
            <img src="IMG/catering/catering.jpg" class="galeria-img" alt="Catering">
            <div class="overlay-text">Catering</div>
          </div>
        </a>
      </div>
      <!-- Imagen 3 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/decoracion.html">
          <div class="galeria-item">
            <img src="IMG/decoracion/decoracion.jpg" class="galeria-img" alt="Decoración">
            <div class="overlay-text">Decoración</div>
          </div>
        </a>
      </div>
      <!-- Imagen 4 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/fotografo.html">
          <div class="galeria-item">
            <img src="IMG/fotografia/fotografo.jpg" class="galeria-img" alt="Fotógrafo">
            <div class="overlay-text">Fotógrafo</div>
          </div>
        </a>
      </div>
      <!-- Imagen 5 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/dj.html">
          <div class="galeria-item">
            <img src="IMG/dj/dj1200x800.jpg" class="galeria-img" alt="DJ">
            <div class="overlay-text">DJ</div>
          </div>
        </a>
      </div>
      <!-- Imagen 6 -->
      <div class="col-sm-6 col-md-4">
        <a href="./HTML/ambientes.html">
          <div class="galeria-item">
            <img src="IMG/ambientes/ambiente.png" class="galeria-img" alt="Ambientes">
            <div class="overlay-text">Ambientes</div>
          </div>
        </a>
      </div>
    </div>
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
          <a href="./HTML/politica_privacidad.html" class="text-white d-block">Política de privacidad</a>
          <a href="./HTML/terminos_condiciones.html" class="text-white d-block">Términos y condiciones</a>
        </div>
      </div>
      <hr class="border-light" />
      <p class="mb-0">&copy; 2025 Anima Tu Fiesta. Todos los derechos reservados.</p>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
