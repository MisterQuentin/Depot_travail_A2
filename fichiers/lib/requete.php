<?php
  require_once("config/config.php");
  require_once(BASE_FILE."lib/pdo.php");

  function recherche_biere($biere){

    $sql="SELECT type_de_biere.nom FROM type_de_biere VALUES(:name)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(":name", $biere, PDO::PARAM_STR);
      $stmt->execute();
  }
 ?>
