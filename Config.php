<?php
    /**
    //Connect to the database
    $host = "127.0.0.1";
    $user = "ryaechuvpz";      
    $pass = "3RV3QH2KBv";      
    $db = "ryaechuvpz";        
    $port = 3306;              
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

*/

    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'jerwaffles');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'Ville_Marie');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>