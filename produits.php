<?php 
 include "component/connect.php";
 if(isset($_POST["bout"])){
    $nom=$_POST["nom"];
    $prix=$_POST["prix"];
    $descrip=$_POST["descrip"];
    
    $image_01 = $_FILES['image_01']['name'];
    $image_size_01 = $_FILES['image_01']['size'];
    $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
    $image_folder_01 = 'images/'.$image_01;
    move_uploaded_file($image_tmp_name_01, $image_folder_01);

    $image_02 = $_FILES['image_02']['name'];
    $image_size_02 = $_FILES['image_02']['size'];
    $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
    $image_folder_02 = 'images/'.$image_02;
    move_uploaded_file($image_tmp_name_02, $image_folder_02);

    $image_03 = $_FILES['image_03']['name'];
    $image_size_03 = $_FILES['image_03']['size'];
    $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
    $image_folder_03 = 'images/'.$image_03;
    move_uploaded_file($image_tmp_name_03, $image_folder_03);

    $req = "insert into 'produits' values (null,'$nom','$prix','$descrip','$image_01','$image_02', '$image_03')";
    mysqli_query($id, $req);
    echo "Produits Ajouter..";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style32.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
  <section>
    <?php include 'component/adminheader.php'?>
  </section>
  <section class="ajouter">
    <h1 class="heading">Ajouter un produit</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="flex">
            <div class="inpute">
                <span>Nom</span>
                <input type="text" name="nom" class="box" required maxlength="100" id="">
            </div>
            <div class="inpute">
                <span>Prix</span>
                <input type="number" name="prix"  class="box"  id="">
            </div>
            <div class="inpute">
                <span>Image01</span>
                <input type="file" name="image_01"  class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required id="">
            </div>
            <div class="inpute">
                <span>Image02</span>
                <input type="file" name="image_02"  class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required id="">
            </div>
            <div class="inpute">
                <span>Image03</span>
                <input type="file" name="image_03"  class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required id="">
            </div>
            <div class="inpute">
                <span>Details</span>
                <textarea name="descrip"  class="box"  required id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="Ajouter" name="bout" class="btn">
    </form>
  </section>
</body>
</html>