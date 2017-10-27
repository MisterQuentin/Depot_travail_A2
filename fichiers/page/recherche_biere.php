<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<<<<<<< HEAD
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
=======
    <h1>RECHERCHE</h1>
    <link rel="stylesheet" href="../css/accueil.css">
  </head>
  <body>
    <div id="navbar">
        <a href="accueil.php"><div id="titre" class="menu">ACCUEIL</div></a>
        <a href="map.php"><div id="map" class="menu">MAP</div></a>
        <a href="recherche_biere.php"><div id="requette" class="menu">RECHERCHE</div></a>
        <a href="contact.php"><div id="contact" class="menu">CONTACT</div></a>
    </div>
>>>>>>> origin/coco
    <?php
      var_dump('test');
      require_once("../lib/requete.php");
      recherche_biere($biere);
    //  var_dump($biere);
     ?>


  </body>
</html>
