<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRay</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style40.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
  <section>
    <?php include 'component/header.php'?>
  </section>
  <section class="accueil" id="accueil">
      <div class="imagese" id="imagese">
            <div class="diva"> 
                <img name="divar"  alt="">    
            </div>
            <div class="spa1">
                <h2>Obtenez 30% de remise avec le <br> CODE : <span>007</span> </h2>  
            </div>
            <a href="shop.php" class="btn1">Shop</a>
        </div>
  </section>
  <script>
     var images=[];
     images[0]="images/il_fullxfull.4483286185_nda4 (5).jpg";
     images[1]="images/Air-Jordan-1-Low-WMNS-University-Blue-4 (6).jpg";
     var i=0;
     var timer=5000;

     function changerimage(){
        document.divar.src=images[i];
        if (i<images.length-1) {
            i++;
        }else{
            i=0;
        }
        setTimeout("changerimage()",timer)
     }
     window.onload=changerimage;
  </script>
  
  <section class="accueilp">
     <h1 class="heading">Notre sélection pour toi</h1>
     <div class="accueilpp">
          <?php
            include "component/connect.php";
            $req="SELECT * from produits limit 3";
            $res= mysqli_query($id,$req);
            while ($ligne=mysqli_fetch_assoc($res)): {
                $pid=$ligne["pid"];
                $nom=$ligne["nom"];
                $prix=$ligne["prix"];
                $image_01=$ligne["image_01"];
            }
         ?>  
            <form action="" method="post" class="swiper-slide slide">
                <input type="hidden" name="pid" value="<?=$pid?>">
                <input type="hidden"  name="nom" value="<?=$nom?>">
                <input type="hidden" name="prix" value="<?=$prix?>">
                <input type="hidden" name="image" value="<?=$image_01?>">
                <div class="prom">
                    <a href="details.php?pid=<?=$pid?>"><img src="<?=$image_01?>" alt=""></a>
                    <div href="details.php?pid=<?=$pid?>" class="nom"><?=$nom?></div>
                    <div class="prix"><span>$</span><?=$prix?></div> 
                </div> 
            </form>  
            <?php endwhile ?>  
     </div>
     <button href="shoes.php" class="decouvrir">Découvrir</button>
  </section>

  <section class="">
     <h1 class="heading">BASKETS B-RAY</h1>
     <div class="para">
     Nos victoires, nous les devons à nous-mêmes. Les chaussures B-RAY ne battent pas les records. Nous oui. Le kilomètre en plus. La rep de plus. Le travail des jambes, le run à l'aube, le match du dimanche, c'est nous. Ce qu'il nous faut, c'est l'équipement qui va avec. Les chaussures de running pour courir, ou marcher. Une paire de chaussures blanches pour porter avec... tout en fait. Nous n'avons besoin que de motivation. Et pour donner le meilleur de nous-mêmes, nous voulons des chaussures B-RAY pour hommes.
     </div>
  </section>
  
 
  <section>
      <?php include 'component/footer.php' ?>
  </section>
  
  
</body>
</html>