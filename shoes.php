<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style40.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<header class="header">
    <section class="flex">
        <a href="" class="logo">B-RAY</span></a>
        <div class="rech">
             <form role="search">
                <input type="search" name="search" >
                <i class="fa-solid fa-2x rec fa-magnifying-glass"></i>
             </form>
        </div>
        <div class="bare">
          <a href="accueil.php">Accueil</a>
        </div>
        <nav class="navbar">
            <div class="bar">
               <a href="../admin/message.php"><i class="fa-solid  fa-cart-shopping"></i></a>
            </div>
            <div class="bar">
             <a href="./connexion.php"><i class="fas fa-user"></i></a>
            </div>
        </nav>
        <div class="profile">

        </div>
    </section>
</header>
  
  <section class="accueilp1">
    <h1 class="heading">Nos baskets</h1>
    <div class="accueilpp">
     <?php
         include "component/connect.php";
         $req="SELECT * from produits";
         $res= mysqli_query($id,$req);
         while ($ligne=mysqli_fetch_assoc($res)): {
             $pid=$ligne["pid"];
             $nom=$ligne["nom"];
             $descrip=$ligne["descrip"];
             $prix=$ligne["prix"];
             $image_01=$ligne["image_01"];
             $image_02=$ligne["image_02"];
             $image_03=$ligne["image_03"];
         }
       ?>   
        <form action="" method="post" class="swiper-slide slide">
            <input type="hidden" name="pid" value="<?=$pid?>">
            <input type="hidden"  name="nom" value="<?=$nom?>">
            <input type="hidden" name="prix" value="<?=$prix?>">
            <input type="hidden" name="image" value="<?=$image_01?>">
            <div class="prom">
            <a href="details.php?pid=<?=$pid?>"><img src="<?=$image_01?>" alt=""></a>
              <div class="nom"><?=$nom?></div>
              <div class="prix"><span>$</span><?=$prix?></div> 
            </div>              
        </form>   
        <?php endwhile ?> 
    </div>
  </section>
  
  <section>
      <?php include 'component/footer.php' ?>
  </section>
  
  
</body>
</html>