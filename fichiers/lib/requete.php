<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27/10/2017
 * Time: 14:55
 */

require_once("config.php");
class Requete
{
    public static function connect() {
        $dsn = "mysql:host=".HOST.";port=3306;dbname=".BASENAME;
        $pdo = new PDO($dsn, LOGIN, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }

    public static function recherche_biere($biere){
        $pdo = self::connect();
        $sql="SELECT type_de_biere.nom FROM type_de_biere VALUES(:name)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $biere, PDO::PARAM_STR);
        $stmt->execute();
    }
}