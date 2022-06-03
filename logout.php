<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Your session is deleted';
   header('Refresh: 2; URL = login.php');
?>