<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6/6</title>
  </head>
  <body>
    <!-- exo06-6/?building=12&room=101 -->
      <?php
        if (isset($_GET['building']) && isset($_GET['room'])) {
        echo $_GET['building'] . ' ' . $_GET['room'];
      }
      ?>
  </body>
</html>
