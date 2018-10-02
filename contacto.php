<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

    <?php
      $imgmain="ing-fin";
      $imgfloat="fin-logo";
      $name="Ingeniería Financiera";
      include ('./dotk/01header/carousel-principal/carouselimg.php');
    ?>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">







      <!-- Titulo -->
      </br>
      <h3 class="h3 text-center">Contacto</h3>
      <div class="alert alert-primary text-center" role="alert">
        UPPachuca consulta tus preguntas, responderemos completamente tus dudas
      </div>

      <!-- Card's -->
      <div class="card offset-sm-3 col-md-6 bg-light text-black">

        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">
            <p class="text-center"><strong>LPCC. Miguel A. Valdivieso Rodríguez.</strong><br>
            Jefe de Servicios Bibliotecarios.</p>

            <p class="text-center"><strong>Dirección:</strong><br>
            Carretera Pachuca — Cd. Sahagún, km 20<br>
            Ex-Hacienda de Santa Bárbara.<br>
            Municipio de Zempoala.&nbsp;Hidalgo.</p>

            <p class="text-center">Teléfono: 01 (77) 1547 7510 ext 221.<br>
            Fax: 01 (77) 1547 7510.<br>
            Correo Electrónico: biblioteca@upp.edu.mx</p>

            <p class="text-center"><strong>Horas de servicio:</strong></p>
            <p class="text-center">De 7:00 a 20:00 hrs. de lunes a viernes.</p>
          </p>
        </div>
      </div>








      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
