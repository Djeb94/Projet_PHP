
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<style>
    body{
        background-color :rgb(33, 33, 33);
    margin: 0px 0px;
    padding-top: 140px;
    zoom: 75%;
    }
    header a{
    color: white;
    text-decoration: none;
    margin-left: 70px;;
    font-size: 17px;
    margin-top: 0px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    flex-basis: auto;
    transition: all 200ms;

    }
    a:hover{
    color: rgb(145, 144, 144);
    text-decoration: underline;
    }
    header{
    position: fixed;
    display: flex;
    justify-content: space-between; 
    align-items: center;
    top:0;
    width: 100%;
    height: 90px;
    background-color: rgb(30, 30, 30);
    }
    button{
    margin-top:10px;
    margin-right: 40px;
    font-size: 17px;
    border: 2px white solid;
    border-radius: 15px;
    color: white;
    background-color: transparent;
    padding: 10px 15px 10px 15px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    margin-left: auto;
    transition: all 250ms;
   
    }
    button:hover{
    color: rgb(145, 144, 144);
    }
    #signIn{
    border: none;
    margin-right: 10px;
    margin-left: 80px
    }
    #signUp{
    
    background-color: rgb(13, 161, 235);
        border:none;
    }

    #signUp:hover{
        background-color: rgb(12, 122, 176);
       color:white;
    }
    #connexion{
      margin-top:0px;
    }
    #inscription{
      margin-top:0px;
      margin-left:10px;
    }
    #recherche{
    border: none ;
    background-color: transparent;
    font-size: 15px;
    flex-basis: auto;
      text-align: left;
    }
    #recherche::placeholder{
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: rgb(177, 177, 177);
    font-size: 13px;
    margin-top: 15px;
    }
    .barreCherche input[type="search"] {
    margin-left : 10px;
    width: 100%;
    border: none;
    color: white;
    font-family: 'Kdam Thmor Pro', sans-serif;
    }
    .barreCherche input[type="search"]:focus {
    outline: none; 
    background-color: rgb(117, 117, 117);
    }
    .barreCherche{
    margin-top : 0px;
    margin-left: auto;
 
    align-items: center;
    background-color: rgb(85, 85, 85);
    padding: 10px 0px;
    width: 300px;
    border: none;
    border-radius: 25px;
    display: flex;
    transition: all 250ms;
    }
    #search{
    color: rgb(177, 177, 177);;
    font-size: 15px;
    margin-left: 15px;
    }
    #sousMenu {
      margin-top:10px;
            display: none;
            position: absolute;
            background-color: rgb(177, 177, 177);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 300px;
    }

        /* Style des liens du sous-menu */
    #sousMenu a {
        padding: 30px 0px 30px 20px;
            color: black;
            /*padding: 12px 16px;*/
            display: block;
            text-decoration: none;
            margin-left: 0px;
  }

        /* Style pour le lien principal */
  #MenuPrincipal {
            position: relative;
            display: inline-block;
            padding-top: 10px;
            
  }
  #compte{
    margin-right: 20px;
  }
  #deco{
    margin-left:5px;
    background-color: rgb(13, 161, 235);
        border:none;
    }

    #deco:hover{
        background-color: rgb(12, 122, 176);
       color:white;
    }
    </style>
<body>
    <header>
        
            
            <a href="index.php?page=">Accueil</a>
            <a href="?page=catalogue1">Catalogue</a>
            <a href="index.php?page=bibliotheque">Bibliotèque</a>
            <a href="index.php?page=info">Guide</a>
           
            <div class="barreCherche" id="couleur-script">
        <span id="search" class="material-symbols-outlined">search</span>
        <form action="index.php?page=pageRecherche" method="POST">
            <input id="recherche" type="search" placeholder="Rechercher" name="nameGame">
            <button style="display:none;">salut</button>
            </form>
        </div>

            <?php if(!isset($_SESSION['nom'])) { ?>
            <a id ="connexion" href="?page=authentification"><button id="signIn">Connexion</button></a>
            <a id ='inscription' href="?page=inscription"><button id='signUp'>S'inscrire</button></a>
            <?php } else { ?>
                <div id='MenuPrincipal'>
        <a id='compte' href='javascript:void(0);' onclick='toggleSousMenu()'>Mon compte</a>
        
        <div id='sousMenu'>
            <a><?=@$_SESSION['nom']?></a>
            <hr width='84%' align='left'>
            <?php if($_SESSION['money'] == 0){?>
            <a href='?page=porte-monnaie'>Mon porte-monnaie : 0 &#8364;</a>
            <?php }else{ ?> <a href='?page=porte-monnaie'>Mon porte-monnaie : <?=@$_SESSION['money']?> &#8364;</a> <?php } ?>
            <hr width='84%' align='left'>
            <a href='?page=panier'>Mon panier, (<?=@$_SESSION['panier']?>)</a>
            <hr width='84%' align='left'>
            <a href='?page=favoris'>Ma liste de souhait, (<?=@$_SESSION['wish']?>)</a>
        </div>
    </div>
    <script>
        function toggleSousMenu() {
            var sousMenu = document.getElementById('sousMenu');
            sousMenu.style.display = (sousMenu.style.display === 'block') ? 'none' : 'block';

            var menuPrincipal = document.getElementById('MenuPrincipal');
            var rect = menuPrincipal.getBoundingClientRect();
            sousMenu.style.left = rect.left + 'px';
            sousMenu.style.top = rect.bottom + 'px';
        }

        window.addEventListener('click', function(event) {
            var sousMenu = document.getElementById('sousMenu');
            var menuPrincipal = document.getElementById('MenuPrincipal');

            if (event.target !== menuPrincipal && !menuPrincipal.contains(event.target)) {
                sousMenu.style.display = 'none';
            }
        });

        var sousMenu = document.getElementById('sousMenu');
        sousMenu.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    </script>
            
            <a id ='inscription' href="?page=exit"><button id='deco'>Déconnexion</button></a>
            <?php } ?>
            
     
    </header>
    <script>
    
    var searchBar = document.getElementById('recherche');
    var container = document.getElementById('couleur-script');

    
    searchBar.addEventListener('click', function() {
    
      container.style.backgroundColor = 'rgb(117, 117, 117)';
    });

   
    document.addEventListener('click', function(event) {
      
      if (event.target !== searchBar) {
       
        container.style.backgroundColor = 'rgb(85, 85, 85)';
      }
    });




    function toggleSousMenu() {
            var sousMenu = document.getElementById('sousMenu');
            sousMenu.style.display = (sousMenu.style.display === 'block') ? 'none' : 'block';

            
            var menuPrincipal = document.getElementById('menuPrincipal');
            var rect = menuPrincipal.getBoundingClientRect();
            sousMenu.style.left = rect.left + 'px';
            sousMenu.style.top = rect.bottom + 'px';
        }

       
        window.addEventListener('click', function(event) {
            var sousMenu = document.getElementById('sousMenu');
            var menuPrincipal = document.getElementById('menuPrincipal');

            if (event.target !== menuPrincipal && !menuPrincipal.contains(event.target)) {
                sousMenu.style.display = 'none';
            }
        });

        
        var sousMenu = document.getElementById('sousMenu');
        sousMenu.addEventListener('click', function(event) {
            event.stopPropagation();
        });
  </script>
 

