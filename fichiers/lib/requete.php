<?php
  require_once("../lib/pdo.php");

  function recherche_biere($biere){

    $sql="SELECT type_de_biere.nom FROM type_de_biere VALUES(:biere)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(":biere", $biere, PDO::PARAM_STR);
      $stmt->execute();
  }
 ?>
