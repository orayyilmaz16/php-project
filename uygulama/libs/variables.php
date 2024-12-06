<?php 
  
  const title = "Popüler Kurslar";


   const db_user = array(
      "username" =>  "sadikturan",
      "password" =>  "12345", 
      "name" => "Sadik Turan"
   );


   


   $kategoriler = array(
       array("kategori_adi" => "Programlama", "aktif" => true),
       array("kategori_adi" => "Web Geliştirme", "aktif" => false),
       array("kategori_adi" => "Veri Analizi", "aktif" => false),
       array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
       array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false),
   );

   $sehirler = array(
       "41" => "Kocaeli",
       "34" => "İstanbul",
       "06" => "Ankara",
       "53" => "Rize",
       "54" => "Sakarya"
   );

   $hobiler = array(
     "1" => "Sinema",
     "2" => "Spor",
     "3" => "Müzik",
     "4" => "Kitap"

   );
 
   $kurslar = array(
     "1" => array(
       "baslik" => "Php Kursu",
       "altBaslik" => "Sıfırdan İleri seviye Php ile Web Geliştirme",
       "resim" => "php.png",
       "yayinTarihi" => "01.01.2023",
       "yorumSayisi" => 0,
       "begeniSayisi" => 10,
       "onay" => true
     ),
     "2" => array(
       "baslik" => "Python Kursu",
       "altBaslik" => "Sıfırdan İleri seviye Python ile Web Geliştirme",
       "resim" => "python.png",
       "yayinTarihi" => "01.01.2023",
       "yorumSayisi" => 10,
       "begeniSayisi" => 0,
       "onay" => true
     ),
     "3" => array(
       "baslik" => "Node.js Kursu",
       "altBaslik" => "Sıfırdan İleri seviye Node.js ile Web Geliştirme",
       "resim" => "nodejs.jpg",
       "yayinTarihi" => "01.01.2023",
       "yorumSayisi" => 10,
       "begeniSayisi" => 20,
       "onay" => true
     ),
     "4" =>  array(
       "baslik" => "Django Kursu",
       "altBaslik" => "Sıfırdan İleri seviye Django ile Web Geliştirme",
       "resim" => "django.png",
       "yayinTarihi" => "05.05.2023",
       "yorumSayisi" => 10,
       "begeniSayisi" => 5,
       "onay" => true
      ) 
   );

  

?>