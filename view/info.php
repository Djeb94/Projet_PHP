<style>
    h1, h2, ol{
    margin-left:40px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: white;
    }
    li{
        font-size: 20px;
        margin-top: 40px;;
    }
    div{
       
    }
    ul{
        margin-top: 145px;
    }
    ul li{
        margin-top: 72px;
    }
</style>

<h1>Bienvenue sur mon site <?=@$_SESSION['nom']?>.</h1><br>

<h2>Je vous propose de découvrir ici mon site de vente de jeux, avec un guide pour explorer ses fonctionnalitée :</h2><br>

<ol type="I">

    <li>
    Barre de recherche
    </li>
    <p>Grace a la barre de recherche vous pouvez directement rechercher le jeu souhaitée par son nom dans la limite des jeux proposé par le catalogue.
    <li>
    Bibliotheque
    </li>
    <p> C'est ici que vous pourrez retrouvez les jeux que vous avez achetés.
    <li>
    Connexion/inscription
    </li>
    <p>Après vous etre créé un compte ou vous etre connecté, vous pourrez acceder au fonctionnalitéedu site.
    <li>
    Connecté
    </li>
    <p>Finalement connecté, séléctionné un jeu que vous voulez dans le catalogue et vous pourrez intéragir avec le jeu pour l'achter, le mettre en favoris ou bien l'ajouter à votre panier.<br>
    Vous pouvez accdeder au paramèetres de votre compte avec le bouton "Mon compte" à droite dans votre barre de navigation.<br>
       
        
    <div>
      <!-- <img src="monCompte.png"  style="margin-top : 40px; border : 1px white solid;"> -->
        <ul style="list-style : none">
            <li>
                <p>- Acceder à votre porte-monnaie.</p>
            </li>
            <li>
                <p>- Consultez votre panier.</p>
            </li>
            <li>
                <p>- Consultez votre liste de souhaits.</p>
            </li>
        </ul>
    </div><br><br>
    /!\ Attention : Vous pourrez manqer de crédits en fonction du jeu que vous voulez achetés.  <br>

    