<style>
    header{
    background-color: rgba(50, 50, 50, 0.663);
    backdrop-filter: blur(4px);
    z-index:3;
}
#logo{
margin-left:50px;
width : 300px;
}
    .donnees-item{
    color: white;
    display: inline-block;
    margin-left: 126px;
    margin-top: 40px;
    }
    .donnees-item p{
        color : rgb(177, 177, 177);
    }
    .donnees-item img{
    width: 350px;
    z-index: 1;
    margin-left: 0px;
    margin-top: 0px;
    }
    .info-ecrite{
        background-color: rgba(50, 50, 50, 0.663);
    backdrop-filter: blur(4px);
    padding: 20px;
    margin-top :40px;
    margin-bottom :20px;
    border-radius: 20px;
    }
    p{
        
    margin-left: 0px;
    font-size: 18px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: white;
    }
    h1{
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: white;
    }
    #descritpion{
        max-width: 1000px;
        font-size: 15px;
        color : rgb(177, 177, 177);
        z-index: 1;
    }
    .containeur{
        display: flex;
        justify-content: space-between; 
    }
    .pegi{
        width: 50px; 
        height: 50px;
        margin-left: 0px;
    }
    .info-vente{
        background-color: rgba(50, 50, 50, 0.663);
    backdrop-filter: blur(4px);
    padding : 40px;
    margin-top: 40px;;
    border-radius: 20px;
        width: 400px;
        display: flex; flex-direction: column;
        margin-left: auto;
        margin-right: 150px;
        z-index: 1;
        margin-bottom: 40px;;
    }
    
    button{
        margin-left: 0px;
    }
    .info-vente p{
       font-size: 40px;
       z-index: 1;
    }
    .info-vente button{
        width: 400px;
        margin-top: 40px;
       border-radius: 10px;
       border: 1px white solid;
       transition: all 100ms;
    }
    .info-vente button:hover{
       background-color: rgb(91, 91, 91, 0.6);
       color:white;
    }
    #acheter{
        background-color: rgb(13, 161, 235);
        border:none;
        z-index: 1;
    }
    #acheter:hover{
        background-color: rgb(12, 122, 176);
       color:white;
    }
    /*#vendre{
        background-color: red;
        border:none;
        z-index: 1;
    }
    #vendre:hover{
        background-color: rgb(175, 6, 6);
       color:white;
    }*/


    #vendre{
        border-color: red;
        background-color: rgba(207, 32, 32, 0.696);
        z-index: 1;
        transition: all 250ms;;
    }
    #vendre:hover{
        background-color: rgba(144, 24, 24, 0.696);
       color:white;
    }
   
    #starGrate{
        color:white;
        background-color: white;
    }
    .rate{
        display:flex;
        margin-top: 100px;;
    }
    .rate p{
     max-height: 22px;
     margin : 47px 0px 0px 10px;
     z-index: 1;
    }
    .photo{
        margin-left: 40px;
        
    }
    .presentation{
        display: flex;
    }
    .imageGamePlay{
        position: relative;
  cursor: pointer;
  display: flex; /* Utilisation de display: flex */
  
  position: relative;
  cursor: pointer;
  margin: 20px; /* Ajout de la marge pour l'esthétique */
    }
    [id^="divGamePlay"]{
       margin : 0px;
    }
    [class^="imageGamePlay"] img{
    width: 240px;
    margin-top: 20px;
    z-index: 1;
    
    }
    
    .imageG{
        z-index: 1;
    }
    [id^="zoom"]{
        
        transition: transform 0.3s ease-in-out;
        z-index: 1;
        border: 1px white solid;
    }
    [id^="zoom"].zoomed{
        transform: scale(3.5);
        z-index: 2;
        border: 1px white solid;
    }
    .body-zoomed {
  backdrop-filter: blur(5px); /* Ajustez la valeur de flou selon vos préférences */
}
#buttonNotConnect{
    margin-top: 150px;;
    background-color: red;
        border:none;
        z-index: 1;
        transition: all 250ms;
}
    #buttonNotConnect:hover{
        background-color: rgb(175, 6, 6);
        
       color:white;
    }
#jouer{
    border: none;
    background-color: white;
    color: rgb(145, 144, 144);
    transition: all 250ms;
}
#jouer:hover{
    background-color: rgb(178, 178, 178);
    color: rgb(145, 144, 144);
}
a span{
    color: white;
    text-decoration: none;
    font-family: 'Kdam Thmor Pro', sans-serif;
    font-size: 5em;

}
#retour{
    background-color: rgba(50, 50, 50, 0.663);
    padding: 20px 10px 5px 10px;
    border-radius: 100px;
}
</style>

<?php $currentUrl = $_SERVER['REQUEST_URI'];
        if (preg_match('/(\d+)$/', $currentUrl, $matches)) {
            $id = $matches[1];}
if(isset($_SESSION['nom'] )){
         $ownerGame =  $_SESSION['nom'] ;
         $ownerGameWish = $_SESSION['nom'].'Wish';
         $ownerGamePanier = $_SESSION['nom'].'Panier';
}           
foreach ($catalogue as $jeux) { 
    if($jeux['id'] == $id){ ?> 
    <style>
    body{
        background-image: url('<?php echo $jeux['bc_image'] ?>');
    background-size: cover;
    }   
    </style>  
    
    <form action="" method="post">  
    <input type="text" name="idJeu" value="<?php echo $id ?>" style="display: none;"> 
    
<div class="containeur">
    
    <div class="donnees-item">
    <a id="retour" href="?page=catalogue1"><span class="material-symbols-outlined">
arrow_back
</span></a>
           <div class="rate">
           
    
           </div>
           <h1> <?php echo $jeux['name'] ?></h1>
           <div class="presentation">
            
           <img id="couverture" src="<?php echo $jeux['image'] ?>">
           <div class="photo">
           <div class="imageGamePlay" id="divGamePlay1" onclick="toggleZoom(this)">
           <img id="zoom" src="<?php echo $jeux['imageGamePlay1'] ?>">
           </div>
           <div class="imageGamePlay" id="divGamePlay2" onclick="toggleZoom(this)">
           <img class="imageG" id="zoom"  src="<?php echo $jeux['imageGamePlay2'] ?>">
           </div>
           <div class="imageGamePlay" id="divGamePlay3" onclick="toggleZoom(this)">
           <img class="imageG" id="zoom" src="<?php echo $jeux['imageGamePlay3'] ?>">
           </div>
</div>
    </div>
   <div class="info-ecrite">
   <p id="note">Date de sortie : <?php echo $jeux['dateSortie'] ?></p>
                <p id="note">Note : <?php echo $jeux['rate'] ?> /5</p>
            <p id="descritpion"><?php echo  $jeux['description'] ?></p>
</div>
        </div>
        
        
        <div class="info-vente">
        <img id="logo" src="<?php echo $jeux['logo'] ?>" alt="pour toute age">
                <?php if($jeux['price'] == 0){
                 echo '<p>'.'gratuit'.'</p>';
                }else {
                echo  '<p>' . $jeux['price'] . '&#8364;</p>';
       
                }
                echo  "<img class='pegi'src='" . $jeux['AgeMin'] . "' >";
                
                if(!isset($_SESSION['nom'])){ ?>
                    <a href="?page=authentification"> <button id="buttonNotConnect" type="button">Connectez-vous !</button> </a>
               <?php  }else {

                    /* ACHAT/VENTE JEUX */
                    if($jeux["$ownerGame"] == false){
                        
                    if($jeux['price'] == 0){
                        echo   '<a id="buy" href=""> <button id="acheter" type="submit">Obtenir</button> </a>';
                        ?>  </form>
                        <?php
                         
                         }else {
                            echo   '<a id="buy" href=""> <button id="acheter" type="submit">Acheter</button> </a>';
                            
                          ?> </form>
                         <?php 
                         } 
                         
                        }else { 
                            ?>
                            <form action="" method="post">
                            <input type="text" name="vendre" value="vendre" style="display: none;"> 
                         <a href="?page="> <button id="vendre" type="submit">Vendre</button> </a>
                        </form>
                              <button id="jouer" type="button">Jouer</button>
                            <?php
                        }  /* AJOUT/SUPPRESSION JEUX DANS LA PANIER */ ?> 
                            <?php  if($jeux["$ownerGamePanier"] == false){ ?>
                            <form action="" method="post">
                            <input type="text" name="panier" value="<?php echo $id ?>" style="display: none;">
                            <button type="submit">Ajouter à mon panier</button>
                         </form><?php }else{ ?>
                            <form action="" method="post">
                            <input type="text" name="suppPanier" value="<?php echo $id ?>" style="display: none;">
                            <button id="vendre" type="submit">Enlever de mon panier</button>
                         </form><?php }?>
                         <!-- AJOUT/SUPPRESSION JEUX DANS LA WISH LIST -->
                        <?php  if($jeux["$ownerGameWish"] == false){ ?>
                            <form action="" method="post">
                            <input type="text" name="favoris" value="<?php echo $id ?>" style="display: none;">
                            <button type="submit">Ajouter à ma liste de souhaits</button>
                         </form><?php }else{ ?>
                            <form action="" method="post">
                            <input type="text" name="suppFav" value="<?php echo $id ?>" style="display: none;">
                            <button id="vendre" type="submit">Supprimer de ma liste de souhaits</button>
                         </form><?php }?>
                
                 
             </div>
     </div>
                
                
    <?php }


}} ?>

    <script>
function toggleZoom(element) {
  var image = element.querySelector('#zoom');
  image.classList.toggle('zoomed');
}

        </script>