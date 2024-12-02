<?php

$ogrenciler = array("ali","ayşe","ahmet","deniz","mehmet");

foreach($ogrenciler as $ogrenci){
    echo $ogrenci."<br>";
}

echo "<br><br>";


$urunler = array(
    "100" => array(
        "urunAdi" => "iphone 14",
        "fiyat" => 40000
    ),
    "101" => array(
        "urunAdi" => "iphone 15",
        "fiyat" =>   50000

    ),
    "102" => array(
        "urunAdi" => "iphone 16",
        "fiyat" => 60000,
    ),
);

$urunler2 = array(
    array("iphone 14",30000),
    array("iphone 15", 35000),
    array("iphone 16",60000),
);

foreach($urunler2 as $urun2){
    echo $urun2[0]." ".$urun2[1]."<br>";
}

echo "<br><br>";

foreach($urunler as $key => $value){
     echo $key;
     echo $value["urunAdi"];
     echo $value["fiyat"];
     echo "<br>";
     
}


?>