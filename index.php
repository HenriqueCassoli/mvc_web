<?php
session_start();
require('vendor/autoload.php');
$app=new  HenriqueCassoli\Application();
//composer dump-autoload utilizar

define('INCLUDE_PATH_STATIC','http://localhost/mvc_web/HenriqueCassoli/pages');

$app->run();



?>