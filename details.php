<?php
  include "component/connect.php";

  $pid = $_GET["pid"];
  
  $req="SELECT * from produits  WHERE pid=$pid ";
  $res= mysqli_query($id,$req);  
  $ligne = mysqli_fetch_assoc($res);          
  $nom=$ligne["nom"];
  $descrip=$ligne["descrip"];
  $prix=$ligne["prix"];
  $image_01=$ligne["image_01"];
  $image_02=$ligne["image_02"];
  $image_03=$ligne["image_03"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style40.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
  <section>
    <?php include 'component/header.php'?>
  </section>
   <section class="detail">
    <h1 class="heading">Details</h1>
    <form action="" method="post" class="bxe">
        <input type="hidden" name="pid" value="<?=$pid?>">
        <input type="hidden"  name="nom" value="<?=$nom?>">
        <input type="hidden"  name="descrip" value="<?=$descrip?>">
        <input type="hidden" name="prix" value="<?=$prix?>">
        <input type="hidden" name="image" value="<?=$image_01?>">
        <input type="hidden" name="image" value="<?=$image_02?>">
        <input type="hidden" name="image" value="<?=$image_03?>">
        <div class="row">
            <div class="image-container">
                <div class="main-image">
                  <img src="<?=$image_01?>" alt="">
                </div>
                <div class="sub-image">
                  <img src="<?=$image_02?>" alt="">
                  <img src="<?=$image_03?>" alt="">
                </div>
            </div>
            <div class="content">
              <div class="dom"><?=$nom?></div>
              <div class="flexe">
                <div class="drix"><span>$</span><?=$prix?></div>
                <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
              </div>
              <div class="descri"><?=$descrip?></div>
              <div class="flex-btn">
                <input type="submit" value="Ajouter au Panier" class="btn5" name="AjoutPanier">
              </div>
            </div>
        </div>
    </form>  
   </section>

  <section>
      <?php include 'component/footer.php' ?>
  </section>
  
</body>
</html>