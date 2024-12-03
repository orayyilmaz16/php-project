<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title.' | '; ?>abc.com</title>
</head>
<body>

 <heeader>
   <?php include $menu ?>
  
 </heeader>

 <main>
    
    <h1>Sayfa başlığı</h1>
    <p>
        <?php include $content ?>
    </p>
 </main>

 
<footer>
    footer
</footer>
    
</body>
</html>