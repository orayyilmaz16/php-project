<?php
 
 $str = "kocaeli,41";
 $arr = explode(",",$str);

 print_r($str);

 $arr = array("sadikturan","mail@ogrenci.com");
 $str = implode(",",$arr);

 print_r($arr);
 echo $str;


?>