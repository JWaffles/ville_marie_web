<?php
    include('../session.php');
?>
<html>
    <head>
        <title>Welcome </title>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" href="../Style_Sheets/stylesheet.css">
    </head>
    
    <body>
        
        <h1>Welcome ADMIN!
        <?php 
        echo "Login id: " . $_SESSION["login_user_id"] . ".<br/>";
        echo "Login name: " . $_SESSION["login_username"] . ".<br/>";
        ?>
        </h1>
        
        
        <h2><a href = "../logout.php">Sign out></a></h2>
        <div id="footer"></div><br />

    <script>
        $("#footer").load("footer.html");
    </script>

    </body>
</html>