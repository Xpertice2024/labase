<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaBaseCowork</title>
  <link rel="shortcut icon" href="./assets/images/logoLaBase-web.png" sizes="48x48" type="image/png">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./bot/bot.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <header class="header" data-header>

    <?php
    include 'encabezado.php';
    ?>

    <?php
    include 'navbar.php';
    ?>

  </header>

  <?php
  include 'cabeza.php';
  ?>

  <?php
  include 'about.php';
  ?>

  <?php
  include 'threeicons.php';
  ?>

  <?php
  include 'cards.php';
  ?>
  <!-- include 'cards.php'; -->


  <?php
  include 'iconos.php';
  ?>

  <?php
  include 'noticias.php';
  ?>

  <!-- include 'webinars.php'; -->

  <section class="cta">
    <div class="container">

      <div class="cta-card">
        <div class="card-content">
          <h2 class="h2 card-title">¿Buscas asesoría legal personalizada?</h2>

          <p class="card-text">Podemos ayudarte a hacer realidad tu sueño de obtener asesoría legal en línea.</p>
        </div>

        <a href="https://www.facebook.com/DerechoArbitrajeEmpresa" target="_blank" class="btn cta-btn">
          <span>Saber más</span>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>

      </div>

    </div>
  </section>

  </article>
  </main>



  <?php
  //include 'bot/ia.php';
  ?>

  <!-- 
    - #FOOTER
  -->

  <?php
  include 'footer.php';
  ?>

  <script src="./assets/js/script.js"></script>
  <script src="./bot/bot.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>