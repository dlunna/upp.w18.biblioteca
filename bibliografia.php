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
      <h3 class="h3 text-center">Bibliografía</h3>
      <div class="alert alert-primary" role="alert">
          Bibliografía disponible en el centro de investigación bibliográfica
      </div>

      <ol>
        <li><a href="./mc/inventario-de-bibliografia-30-de-junio_2016.xlsx">Inventario de Bibliografía 30 de junio 2016</a></li>
      </ol>








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
