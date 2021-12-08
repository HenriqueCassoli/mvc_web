<?php

namespace  HenriqueCassoli;

use Exception;
use PDO;

class MySql{

    private static $pdo;

    public static function connect(){
      if (self::$pdo== null) {
          try{
              self::$pdo =new \PDO('mysql:host=localhost;dbname=mvc_web','root','',array(PDO::
              MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf-8"));
              self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);  
          }catch(Exception $e){
                echo 'erro conectar';
                error_log($e->getMessage());
          }   
        }
         return self::$pdo;
    }
}




?>