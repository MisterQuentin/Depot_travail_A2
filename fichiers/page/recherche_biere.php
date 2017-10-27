<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <h1>Recherche binouz</h1>
    <link rel="stylesheet" href="../css/accueil.css">
  </head>
  <body>
    <div id="navbar">
        <a href="accueil.php"><div id="titre" class="menu">ACCUEIL</div></a>
        <a href="map.php"><div id="map" class="menu">MAP</div></a>
        <a href="recherche_biere.php"><div id="requette" class="menu">RECHERCHE</div></a>
        <a href="contact.php"><div id="contact" class="menu">CONTACT</div></a>
    </div>
    <?php
      require_once("config/config.php");
      require_once(BASE_FILE."lib/pdo.php");
     ?>
  </body>
</html>
