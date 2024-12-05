<?php 

    require "libs/variables.php";
    require "libs/function.php";

    

?>

  

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php   



    $usernameErr = "";
    $emailErr = "";
    $passwordErr = "";
    $repasswordErr = "";
    $cityErr = "";
    $hobiesErr = "";

    $username = "";
    $email = "";
    $password = "";
    $repassword = "";
    $city = ""; 

    $hobies = [];
    
       

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        if(empty($_POST["username"])){
            $usernameErr = "username gerekli alan.";
        }else{
            $username = safe_html($_POST["username"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "email gerekli alan.";
        }else{
            $email = safe_html($_POST["email"]);
        }

        if(empty($_POST["password"])){
            $passwordErr = "password gerekli alan.";
        }else{
            $password = safe_html($_POST["password"]);
        }

        if($_POST["password"] != $_POST["repassword"]){
            $repasswordErr = "parola alanı eşleşmiyor.";
        }else{
            $repassword = safe_html($_POST["repassword"]);
        }

        if($_POST["city"] == -1){
            $cityErr = "şehir seçmelisiniz.";
        }else{
            $city = $_POST["city"];
        }

        if(!isset($_POST["hobies"])){
            $hobiesErr = "hobi seçmelisiniz.";
        }else{
            $hobies = $_POST["hobies"];
        }
        
    

       
    }


?>

<div class="container my-3">

     <div class="row">
        <div class="col-12">
           
          <form action="register.php" method="post">
             <div class="mb-3">
                <label for="username">Kullancı Adı</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username?>">
                <div class="text-danger"><?php echo $usernameErr; ?></div>
             </div>
             <div class="mb-3">
                <label for="email">E-posta</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email?>">
                <div class="text-danger"><?php echo $emailErr; ?></div>
             </div>
             <div class="mb-3">
                <label for="password">Parola</label>
                <input type="password" name="password" class="form-control" value ="<?php echo $password?>">
                <div class="text-danger"><?php echo $passwordErr; ?></div>
             </div>
             <div class="mb-3">
                <label for="repassword">Parola Tekrar</label>
                <input type="password" name="repassword" class="form-control">
                <div class="text-danger"><?php echo $repasswordErr; ?></div>
             </div>
             <div class="mb-3">
                <label for="city">Şehir</label>
                <select name="city" class="form-select" >
                    <option value="-1" selected>Şehir Seçiniz</option>

                    <?php foreach($sehirler as $plaka => $sehir): ?>
                       <option 
                            value="<?php echo $plaka; ?>"  <?php echo $city == $plaka ? ' selected': '' ?>><?php echo $sehir; ?>
                        </option>
                    <?php endforeach  ?>

                </select>
                <div class="text-danger"><?php echo $cityErr; ?></div>
             </div>
             <div class="mb-3">
                <label for="hobiler">Hobiler</label>
                
                <?php foreach($hobiler as $id => $hobi): ?>
                    <div class="form-check">
                        <input type="checkbox" name="hobies[]"
                         value="<?php echo $hobi; ?>"
                          id="hobies_<?php echo $id; ?>"
                          <?php if (in_array($hobi, $hobies)) echo 'checked' ?>
                          >

                        <label for="hobies_<?php echo $id; ?>" class="form-check-label"><?php echo $hobi; ?></label>
                    </div>
                <?php endforeach; ?>

                <div class="text-danger"><?php echo $hobiesErr; ?></div>
             </div>
             <button type="submit" class="btn btn-primary">Kayıt Ol</button>
          </form>

      </div>
     </div>

</div>
    
<?php include "partials/_footer.php" ?>


