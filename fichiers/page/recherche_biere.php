<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recherche binouz</title>
  </head>
  <body>
    <h2>Recherchez votre bière</h2>
    <?php
      require_once(BASE_FILE."lib/requete.php");
      recherche_biere($biere);
      var_dump($biere);
     ?>
  </body>
</html>
