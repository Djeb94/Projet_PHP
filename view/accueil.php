<style>
    .donnees-item{
    color: white;
    display: inline-block;
    margin-left: 100px;
    margin-top: 20px;
    }
    .donnees-item img{
    width: 180px;
    margin-left: 0px;
    margin-top: 0px;
    }
    .donnees-item p{
    margin-left: 0px;
    font-size: 18px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    }
    h1{
    margin-left:60px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: white;
    
    }
    h2{
      margin-top: 100px;
    margin-left:100px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: white;
    }
    .sous-catalogue{
        display: flex;
    }
    #voir-plus{
        margin-left: 20px;
        margin-top: 115px;
        text-decoration: underline;
        font-family: 'Kdam Thmor Pro', sans-serif;
        color:rgb(177, 177, 177);
    }
    a{
        text-decoration: none;
    
    }
    .donnees-item a{
    
        text-decoration: none;
        color: white;
    
    
    }
    #bienvenu{
      font-size: 60px;
      margin-top: 40px;
    }
    #offre{
      text-align: center;
      margin: 0px;
      padding: 0px 0px 10px 0px;
    }
    #div-offre{
      border-radius: 10px;
      margin-top: 80px;
      padding: 10px 0px 0px 10px;
      margin-left: 180px;
      width: 80%;
      background-color: rgb(41, 41, 41);
    }
    #important{
      background-color: rgb(13, 161, 235);
      color: white;
      padding: 5px;
      font-weight: bolder;
      border-radius: 5px;
      }
      mark{
        background-color: transparent;
        color: white;
        padding: 0px 40px 0px 40px;
      }
      .bc_month{
        margin-top: 80px;
        background-color: rgb(85, 85, 85);
        
       
        padding: 1px 100px 20px 0px;
        border-radius: 20px;;
      }
      .center{
        display: flex;
        justify-content: center;
      }
      .bc_month h2{
        text-align: center;
        font-size: 50px;
        margin-top: 30px;
        padding: 10px 0px 30px 0px;
      }
      .bc_month img{
        width: 240px;
    margin-left: 0px;
    margin-top: 0px;
      }
      .bc_month p {
        margin-left: 0px;
    font-size: 20px;
    
      }
      .pegi{
display: flex;
      }
</style>

<!-- PERSONNALISATION POUR L'USER -->

<?php
 if(!isset($_SESSION['nom'])){ ?>
 <div id="div-offre">
  <h2 id="offre">&#x1F514; <mark>Recevez <mark id="important">50&#8364; offert</mark> pour la création d'un nouveau compte !</mark> &#x1F514;</h2>
 </div>
 <?php }
?> 


 <h1 id="bienvenu">Bonjour <?=@$_SESSION['nom']?>,</h1>


<!-- ACCEUIL JEUX DU MOIS -->

<div class="center">
<div class="bc_month">
<h2>Les jeux du mois,</h2>
<?php

 foreach ($catalogue as $jeux) { 
    if($jeux['statue'] == 'jeuxDuMoi'){ ?> 
    
    
    
     <div class="donnees-item">
     <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
     <img src=" <?php echo $jeux['image'] ?>">
     <p><?php echo $jeux['name'] ?> </p>
     </a>
    </div>
    
 
    <?php
}
}
?>  </div>
</div>


<!-- ACCEUIL APERCU CATALOGUE  -->
<div class="sous-catalogue">
<h2>Notre catalogue,</h2>
<a href="?page=catalogue1" id="voir-plus">Voir plus</a>
</div>

<?php
 foreach ($catalogue as $jeux) { 
    if($jeux['id'] <= 7){ ?> 

    <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
     <div class="donnees-item">
     <img src=" <?php echo $jeux['image'] ?>">
     <p><?php echo $jeux['name'] ?> </p>
    </div>
    </div></a>
    <?php
}
}
?> 
 
<!-- ACCEUIL SELECTION POUR LES ENFANTS -->
<div class="pegi">
<h2>Pour les enfants,  </h2>
<img src="https://cdn1.epicgames.com/gameRating/gameRating/PEGI_3_192_192x192-490b93ddf59fb4ac1148d1eb9083626a" style="width : 40px; height : 47px; margin-top : 85px; margin-left : 10px;">
</div>
<?php

 foreach ($catalogue as $jeux) { 
    if($jeux['statue'] == "enfants"){ ?> 

    <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
     <div class="donnees-item">
     <img src=" <?php echo $jeux['image'] ?>">
     <p><?php echo $jeux['name'] ?> </p>
    <?php if($jeux['price'] == 0){
     echo  '<p>'.'gartuit'.'</p>';
    }else {
      echo  '<p>' . $jeux['price'] . '&#8364;</p>';
    }?>
    </div>
    </div></a>
    <?php
}
}
?> 

<!-- ACCEUIL SELECTION POUR LES ADULTES -->
<div class="pegi">
<h2>Pour les adultes, </h2>
<img src="https://cdn1.epicgames.com/gameRating/gameRating/PEGI_18_192_192x192-d6a2111e4c05a18bc5ec235df88a7382" style="width : 40px; height : 47px; margin-top : 85px; margin-left : 10px;">
</div>
<?php

 foreach ($catalogue as $jeux) { 
    if($jeux['statue'] == "adulte"){ ?> 

    <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
     <div class="donnees-item">
     <img src=" <?php echo $jeux['image'] ?>">
     <p><?php echo $jeux['name'] ?> </p>
    <?php if($jeux['price'] == 0){
     echo  '<p>'.'gartuit'.'</p>';
    }else {
      echo  '<p>' . $jeux['price'] . '&#8364;</p>';
    }?>
    </div>
    </div></a>
    <?php
}
}
?> 

<!-- ACCEUIL JEUX GRATUITS -->

<h2>Nos jeux gratuits,</h2>

<?php
 foreach ($catalogue as $jeux) { 
    if($jeux['price'] == 0){ ?> 

    <a id="lienPageVente" href="?page=pageVente<?php echo $jeux['id'] ?>">
     <div class="donnees-item">
     <img src=" <?php echo $jeux['image'] ?>">
     <p><?php echo $jeux['name'] ?> </p>
    <?php if($jeux['price'] == 0){
     echo  '<p>'.'gartuit'.'</p>';
    }else {
      echo  '<p>' . $jeux['price'] . '&#8364;</p>';
    }?>
    </div>
    </div></a>
    <?php
}
}
?> 


