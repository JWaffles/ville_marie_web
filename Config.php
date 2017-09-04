<?php
/**
    //Connect to the database
    $host = "35.185.5.176";
    $user = "ryaechuvpz";      
    $pass = "3RV3QH2KBv";      
    $db = "ryaechuvpz";        
    $port = 8082;              
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    ////// Online database /////////
    define('DB_SERVER', '35.185.5.176');
    define('DB_USERNAME', 'ryaechuvpz');
    define('DB_PASSWORD', '3RV3QH2KBv');
    define('DB_DATABASE', 'ryaechuvpz');

    ////// Local database //////////
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'jerwaffles');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'Ville_Marie');
*/
    define('DB_SERVER', '35.185.5.176');
    define('DB_USERNAME', 'jerwaffles');
    define('DB_PASSWORD', 'Caramsl1');
    define('DB_DATABASE', 'ryaechuvpz');
    
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

?>