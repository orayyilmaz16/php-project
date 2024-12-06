<?php 
    
    $myfile = fopen("dosya.txt","r");
    $size = filesize("dosya.txt");


   while(!feof($myfile)){
        echo fgets($myfile)."<br>";
   }
   

   fclose($myfile);

?>