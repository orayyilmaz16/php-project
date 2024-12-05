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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
   <form action="upload.php" method="post" enctype="multipart/form-data">
         <input type="text" name="username">
         <input type="file" name="fileToUpload">
         <input type="submit" value="Upload" name="btnFileUpload">
   </form>

</body>
</html>