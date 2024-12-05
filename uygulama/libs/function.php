<?php 
  
function kursEkle(&$kurslar, string $baslik,string $altBaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0 ,int $begeniSayisi=0,bool $onay = true) {
    $yeni_kurs[count($kurslar) + 1] = array( 
      "baslik" => $baslik,
      "altBaslik" => $altBaslik,
      "resim" => $resim,
      "yayinTarihi" => $yayinTarihi,
      "yorumSayisi" => $yorumSayisi,
      "begeniSayisi" => $begeniSayisi,
      "onay" => $onay
    );

   $kurslar = array_merge($kurslar, $yeni_kurs);
}

kursEkle($kurslar, "React Kursu","Sıfırdan İleri Seviye React ile Mobil Geliştirme","react.jpg","09.09.2023",10,10,true);
kursEkle($kurslar, "C# Kursu","Sıfırdan İleri Seviye C# ile Web Geliştirme","csharp.png","11.11.2023",10,10,true);

function urlDuzenle($baslik){
    return str_replace([" "],["-"],strtolower($baslik));
}

function kisaAciklama($altBaslik){
   
   if(strlen($altBaslik > 50)){
     return substr($altBaslik,0,50)."...";
   } else {
     return $altBaslik;
   }
}

function safe_html($data){
    
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

}



?>