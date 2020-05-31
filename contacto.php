<?php
include("php/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <title>Contacto</title>
</head>

<body>
  <!-- NavVar /Header-->
  <header>
    <nav class="container navbar navar-light">
      <a href="index.html" class="navbar-brand titulo">Kelvin Martinez Ramos</a>

      <ul class="nav-list">
        <li> <a href="index.html">Inicio</a></li>
        <li> <a href="index.html">A cerca de mi</a></li>
        <li> <a href="index.html">Servicios</a></li>
        <li> <a href="contacto.html">Portafolio</a></li>
        <li> <a href="#contacto">Contactame</a></li>

      </ul>

    </nav>
  </header>


  </div>
  <div class="container">

    <!--MOSTRAR  MENSAJE-->
    <?php if (isset($_SESSION['mensaje'])) : ?>

      <div class="container alert alert-<?php echo $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['mensaje']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--LIMPIAR LOS DATOS DE LA SESSION-->
      <?php session_unset(); ?>

    <?php endif; ?>
    <h1 class="titulo_contacto">
      Portafolio
    </h1>

    <!-- Modal -->
    <div class="contenedor-galeria">
      <img src="img/1.jpg" alt="" class="galeria_img">
      <img src="img/2.jpg" alt="" class="galeria_img">
      <img src="img/3.jpg" alt="" class="galeria_img">
      <img src="img/4.jpg" alt="" class="galeria_img">
      <img src="img/5.jpg" alt="" class="galeria_img">
      <img src="img/6.jpg" alt="" class="galeria_img">
      <img src="img/7.jpg" alt="" class="galeria_img">
      <img src="img/8.jpg" alt="" class="galeria_img">
    </div>


    <!-- Form -->
    <form id="contacto" action="php/saveinfo.php" method="POST">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Juancho" pattern="[A-Za-z]{3,40}" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">¿En qué servicio está interesado ?</label>
        <select class="form-control" id="exampleFormControlSelect1" name="servicio" required>
          <option value="Reparacion de equipos">Reparacion de equipos</option>
          <option value="Creacion de paginas web">Creacion de paginas web</option>
          <option value="Asesorias de sistemas">Asesorias de sistemas</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Dirección e-mail</label>
        <input type="email" class="form-control" id="exampleFormControlInput1 " name="e-mail" placeholder="Jancho_perez@correo.com" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
      </div>

      <!-- <input type="submit" class="registrar btn btn-primary" id="enviar" name="enviar" value="enviar"> -->

      <button type="submit" id="enviar" name="enviar" value="enviar" class="btn btn-outline-info enviar">Enviar datos</button>
    </form>
    <footer class="mt-4">
      <div class="pie_pagina pie_pagina_contacto">
        !Gracias por visitar mi pagina!
      </div>
    </footer>

  </div>

  <script type="text/javascript" src="js/modal.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>



</html>