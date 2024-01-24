<?php
 session_start();
 include "../component/connect.php";
 
 if(isset($_POST["submit"])){
   $anom=$_POST["anom"];
   $amdp=$_POST["amdp"];
   $res=mysqli_query($id, "select * from admin WHERE anom='$anom'and amdp='$amdp'");
    
    if(mysqli_num_rows($res) == 1) {
       $ligne = mysqli_fetch_assoc($res);
       $_SESSION["aid"] = $ligne["aid"];
       $_SESSION["anom"] = $ligne["anom"];
       
       header("location:../admin/dashboard.php");
    }else{
       $erreur = "Erreur de Nom ou de Mdp";
    } 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminconnect</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/adminsty.css">
</head>
<body>
    
    <section class="form-container">
       <form action="" method="POST">
        <h3>Connectez Vous</h3>
        <p>Nom par défaut = <span>admin</span> & Password = <span>111</span></p>
        <input type="text" name="anom" required placeholder="Entrer votre nom" maxlength="30" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="password" name="amdp" required placeholder="Entrer votre Mdp" minlength="3" maxlength=30 class="box">
        <?php if(isset($message)) echo"$erreur" ?>
        <input type="submit" value="Se Connecter" name="submit" class="btn">
       </form>
    </section>
</body>
</html>