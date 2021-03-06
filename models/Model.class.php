<?php

abstract class Model{
    private static $pdo;

    private static function setDb($db, $user, $pass, $host, $port, $options)
    {
        if(empty($options[PDO::ATTR_ERRMODE]))
            {
                $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_WARNING;
            }
            try
            {
                self::$pdo = new PDO('mysql:host='. $host .':'. $port .';dbname='. $db, $user, $pass, $options);
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }

    protected function getDb($db, $user, $pass, $host, $port, $options)
    {
        if(self::$pdo === null)
        {
            self::setDb($db, $user, $pass, $host, $port, $options);
        }

        return self::$pdo;
    }
}