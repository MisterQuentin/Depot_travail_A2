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
//      var_dump('test');
      require_once("../lib/Requete/Biere.php");

      var_dump(Biere::rechercheBy_Nom($biere));
     ?>
  <body>
    <h2>Recherchez votre bière</h2>
    <?php
      require_once("config/config.php");
      require_once(BASE_FILE."lib/pdo.php");
     ?>

  </body>
</html>
