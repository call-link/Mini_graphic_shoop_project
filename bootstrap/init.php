<?php
require 'constants.php' ;
require 'config.php' ;
require BASE_PATH . 'helpers/helpers.php' ;
require BASE_PATH . 'utilities/utilities.php' ;



#connect to database
try {
    $pdo = new PDO( "mysql: host=$database_config->host;dbname=$database_config->dbname;charset=$database_config->charset",$database_config->user, $database_config->pass) ;
} catch (PDOException $e) {
    echo 'Faid to connect :' . $e->getMessage() ;
    die();
}