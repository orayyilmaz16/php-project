<?php 

  
    $myfile = fopen("dosya2.txt","a+");

    $title = "Java Dersleri\n";

    fwrite($myfile, $title);

    fseek($myfile, 0);

    while(!feof($myfile)){
        echo fgets($myfile)."<br>";
    }

    fclose($myfile);

?>