<?php
include('Config.php');
session_start();

$user_check = $_SESSION['login_user_id'];

$ses_sql = mysqli_query($db,"select USER_NAME from Users where USER_NAME = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USER_NAME'];
   
   // if(!isset($_SESSION['login_user'])){
   //    header("location:login.php");
   // }
?>