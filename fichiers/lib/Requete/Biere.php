<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27/10/2017
 * Time: 15:46
 */
require_once ('Requete.php');
class Biere extends Requete
{

    public static function rechercheBy_Nom($nom){
        try {
            $pdo = self::connect();
            $sql = "SELECT * FROM type_de_biere WHERE `nom` = :nom";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $nom, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){
            echo "erreur dans recherche biere via ID  ----". $e->getMessage();
        }
    }

    public static function rechercheBy_ID($id){
        try {
            $pdo = self::connect();
            $sql = "SELECT * FROM type_de_biere WHERE `id_biere` = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (Exception $e){
            echo "erreur dans recherche biere via ID  ----". $e->getMessage();
        }
    }
}