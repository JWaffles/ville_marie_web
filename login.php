<?php

    include("Config.php");
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // username and password send from form
        
       $myusername = mysql_real_escape_string($_POST['username'], $db);
        $mypassword = mysql_real_escape_string($_POST['password'], $db);
      //  $myusername = mysql_real_escape_string($db, $_POST['username']);
      //  $mypassword = mysql_real_escape_string($db, $_POST['password']);
      
      $sql = "SELECT USER_ID, ADMIN FROM Users WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
      $result = mysql_query($sql, $db);
      $row = mysql_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user_id'] = $row["USER_ID"];
         $_SESSION['login_username'] = $myusername;
         
         if($row["ADMIN"] == 1){
            header ("HTTP/1.1 301 Moved Permanently");
            header ("Location: Admin/welcome_admin.php");
            exit();
         }
         header ("HTTP/1.1 301 Moved Permanently"); 
         header ("Location: User/welcome_user.php");
         // header ("Location: http://www.cerclevillemarie.ca/welcome.php"); 
         exit();
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   <head>
      <title>Login Page</title>
      
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <link rel="stylesheet" type="text/css" href="Style_Sheets/stylesheet.css">
   
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
      
	<div id="header"></div><br />
      
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
      
      <div id="footer"></div><br />

    <script>
        $("#header").load("header.html");
        $("#footer").load("footer.html");
    </script>
    
   </body>
</html>