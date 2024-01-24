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

https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d9f9164e-0b95-4522-8791-d5c50b654013/chaussure-de-basketball-jordan-one-take-4-n6nzpd.png

<button class="fas fa-heart" type="submit" name="favoris"></button>

<img src="<?=$image_01?>" alt="">