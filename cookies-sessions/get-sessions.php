<?php

 
   session_start();

   $_SESSION = [];

   if(isset($_SESSION["username"])){
    echo $_SESSION["username"];
   }
   else{
    echo "username yok";
   }

   echo $_SESSION["password"];

   print_r($_SESSION);

  




?>