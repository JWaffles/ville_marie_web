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
        <h1>Bienvenue a la function relier au membres du Cercle des Handicapes Visuels Ville Marie.</h1>
        <h2>Ici vous trouverez la liste des membres, et d'autre function associer au membres.</h2>
        <ul>Les functions inclues:
            <li>Voir ou modifier des membres.</li>
            <li>Rajouter un paiement de carte de membre.</li>
            <li>Supprimer un membre.</li>
        </ul>
        <form action="#" method="post">
        Suivant ce trouve la liste de membres: <br/>
        Type de membre a montre:
        <select> 
            <option value="membre">Membre</option>
            <option value="non-membre">Non-Membre</option>
            <option value="guide">Guide</option>
            <option value="benevolat">Benevol</option>
            <option value="membre_associer">Membre-associer</option>
            <option value="tous">Tous</option>
        </select>
        <br/>
        
        Annee de Carte de Membres:
        <select> 
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>
        <br/>
        Sort by:
        <select> 
            <option value="membre">Membre</option>
            <option value="non-membre">Non-Membre</option>
            <option value="guide">Guide</option>
            <option value="benevolat">Benevol</option>
            <option value="membre_associer">Membre-associer</option>
        </select>
        <br/>
        <input type="submit" value="Create Table" name="Generate"/>
        </form>
        
        
        <?php
        if (!isset($_POST['submitform'])) {   
            echo "Display table";
            
        }
        
        ?>
        <!-- TODO: Makes a dropdown selection to display either an activity, a member, or the list of members/activities -->
        
        
        
        
        <div id="footer"></div><br />

    <script>
        $("#header").load("admin_header.php");
        $("#footer").load("admin_footer.php");
    </script>

    </body>
</html>