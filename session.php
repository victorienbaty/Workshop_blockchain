<?php
   include('config.php');
   session_start();

   $db=connect();
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = "select login from login where username = '$user_check' ";

   $row=$db->query($ses_sql);
   
   $login_session = $row['login'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
