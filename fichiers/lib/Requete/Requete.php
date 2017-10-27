<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27/10/2017
 * Time: 15:45
 */

require_once(BASE_FILE."lib\config.php");
class Requete
{
    public static function connect()
    {
        try {
            $dsn = "mysql:host=" . HOST . ";port=3306;dbname=" . BASENAME;
            $pdo = new PDO($dsn, LOGIN, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Exception $e) {
            echo "erreur dans la connection a la base " . $e->getMessage();
        }
    }

}