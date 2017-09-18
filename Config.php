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
    define('DB_USERNAME', 'wdrxfxeejk');
    define('DB_PASSWORD', '3RV3QH2KBv');
    define('DB_DATABASE', 'wdrxfxeejk');

    ////// Local database //////////
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'jerwaffles');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'Ville_Marie');
*/
    
    // $host = "104.207.159.189";
    // $user = "wdrxfxeejk";      
    // $pass = "tmmYwKbR9e";      
    // $db = "wdrxfxeejk";        
    // $port = 3306;
    
    // $db = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $db = mysql_connect( "127.0.0.1:3307", "wdrxfxeejk", "tmmYwKbR9e");
    mysql_select_db( "wdrxfxeejk", $db);
    
    // Need to run 2 commands before this can work:
    // 1.    ssh -fNg -L 3307:127.0.0.1:3306 master_exjecnsphv@104.207.159.189
    // Then enter the password for master
    // 2. mysql -h 127.0.0.1 -P 3307 -u wdrxfxeejk -p wdrxfxeejk
    // Then enter the password for the user
    // Then this should work. This is only to connect to the Cloudways databse through the Cloud9.io
    
    

?>