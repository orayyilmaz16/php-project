<?php 

if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"] == "Upload") {
    



   $destinationPath = "./uploadedFiles/";
   $filename = $_FILES["fileToUpload"]["name"];

  if(empty($filename)){
     echo "dosya seçiniz";
  }

   $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];

   $fileDestinationPath = $destinationPath.$filename;

   if(move_uploaded_file($fileSourcePath, $fileDestinationPath)){
     echo "dosya yüklendi.";
   }
   else{
     echo "hata";
   }

}


?>