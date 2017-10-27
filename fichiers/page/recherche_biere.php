<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recherche binouz</title>
    <?php
        require_once("../lib/config.php");
        $biere = "";
     ?>

  </head>
  <body>
    <h2>Recherchez votre bière</h2>
    <a href="accueil.php"><button type="button" name="button">retour accueil</button></a>
    <label> Choisissez une bière</label>
    <input type="text" name="biere" value="<?php echo $biere; ?>">
    <input type="button" name="" value="valider">
    <?php
      var_dump('test');
      require_once("../lib/requete.php");
      recherche_biere($biere);
    //  var_dump($biere);
     ?>


  </body>
</html>
