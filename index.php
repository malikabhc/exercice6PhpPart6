<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6/6</title>
  </head>
  <body>
    <!-- exo06-6/?building=12&room=101 -->
      <?php
        if (!empty($_GET['building'])) {
        echo $_GET['building'] . ' ';
      } else {
        echo 'Veuillez saisir le numéro d\'immeuble ';
      }
      if (!empty($_GET['building']) && !empty($_GET['room'])) {
      echo ' ' . $_GET['room'];
      } else {
        echo ' Veuillez saisir le numéro de chambre';
      }
      ?>
  </body>
</html>
