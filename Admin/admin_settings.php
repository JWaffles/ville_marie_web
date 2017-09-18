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
        
        <div id="header"></div><br/>
        <h1>Welcome ADMIN!
        <?php 
        echo "Login id: " . $_SESSION["login_user_id"] . ".<br/>";
        echo "Login name: " . $_SESSION["login_username"] . ".<br/>";
        ?>
        </h1>
        <!-- TODO: Makes a dropdown selection to display either an activity, a member, or the list of members/activities -->
        
        
        <div id="footer"></div><br />

    <script>
        $("#header").load("admin_header.php");
        $("#footer").load("admin_footer.php");
    </script>

    </body>
</html>