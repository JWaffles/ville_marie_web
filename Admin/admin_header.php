<?php
    include('../session.php');
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Style_Sheets/stylesheet.css">

</head>

<body>
    <br/>
    <br/>
        <div class="header_top_section">
             <?php $_SESSION["login_username"]?></h1>
        <?php 
            echo "<h1 class=\"header_title\">Bienvenue " . $_SESSION["login_username"] . ".<br/>";
        ?>
            <h2><a class="header_login_button" href = "/logout.php">Sign out></a></h2>

            <!--$_SESSION["login_username"]-->

        </div>
        <br/>

        <ul class="header_menu">
            <li class="header_menu"><a href="welcome_admin.php">Profile</a></li>
            <li class="header_menu"><a href="admin_members.php">Membres</a></li>
            <li class="header_menu"><a href="admin_activities.php">Activités</a></li>
            <li class="header_menu"><a href="admin_settings.php">Settings</a></li>
        </ul>
        
    

</body>

</html>
