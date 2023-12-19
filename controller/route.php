<?php

//$page = $_GET['page'];
$page = isset($_GET['page']) ? $_GET['page'] : null;


if ($page == '') {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getJeuxAccueil();
    $_SESSION['erreur_message']='';
    $articles->getInfo();
   
   
} elseif ($page == 'info') {
    include('view/info.php');
    $_SESSION['erreur_message']='';

}elseif ($page == 'erreur') {
    include_once('view/erreur.php');
    include('view/authentification.php');
}
elseif ($page == 'favoris') {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getFavoris();

}elseif ($page == 'panier') {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getPanier();

}elseif ($page == 'porte-monnaie') {
    include_once('controller/usersController.php');
    $articles = new UsersController;
    $articles->increaseMoney();
    
} elseif (strpos($page, 'catalogue') === 0) {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getCatalogue();
    $_SESSION['erreur_message']='';

}elseif ($page == 'bibliotheque') {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getBibliotheque();
    $_SESSION['erreur_message']='';

}elseif ($page == 'pageRecherche') {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getGameByName();

}  elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
    $_SESSION['erreur_message']='';

} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();

} elseif ($page == 'exit') {
    $_SESSION=array();
    echo "<script>window.location.href = 'index.php?page=';</script>";
}
elseif (strpos($page, 'pageVente') === 0) {
    include_once('controller/catalogueController.php');
    $articles = new CatalogueController;
    $articles->getJeux();
    $articles->buyGame();
    $articles->favGame();
    $articles->panierGame();
    $articles->getInfo();
}
else {

    echo '<header style="background-color :rgb(33, 33, 33)"> <h1 style = " color : white "> error 404 </h1> </header>';
   
}

