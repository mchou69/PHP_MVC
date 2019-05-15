<?php

abstract class Model {
    private static $bdd=null;

    protected function execute($sql, $params = null) {
        if ($params == null) {
            $result = self::getBdd()->query($sql);
        }
        else {
            $result = self::getBdd()->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }

    private static function getBdd() {
        if (self::$bdd === null) {

            $host  = 'localhost';//Configuration::get("adresse_de_host");
            $name  = 'mvc';//Configuration::get("nom_de_la_base");
            $login = 'root';//Configuration::get("nom_du_user");
            $mdp   = '123+aze';//Configuration::get("mot_de_passe");

            self::$bdd = new PDO('mysql:host='.$host.';dbname='.$name, $login,
                $mdp,array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ));

            //echo 'connection done!';
        }
        return self::$bdd;
    }
}