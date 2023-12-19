<?php
include_once('model\catalogueModel.php');

class CatalogueController
{

    private $model;
    public function __construct()
    {
        $this->model = new CatalogueModel;
    }


   public function getCatalogue()
{
    $currentUrl = $_SERVER['REQUEST_URI'];
        if (preg_match('/(\d+)$/', $currentUrl, $matches)) {
            $id = $matches[1];}
            
    if($id == '1') {
    $catalogue = $this->model->getCatalogue();
    }
    if ($id == '2') {
        $catalogue = $this->model->getCatalogueByMax();
    } elseif ($id == '3') {
        $catalogue = $this->model->getCatalogueByMin();
    } elseif ($id == '4') {
        $catalogue = $this->model->getCatalogueByRate();
    } elseif ($id == '5') {
        $catalogue = $this->model->getCatalogueByDate();
    }

    include_once("view/catalogue.php");

}

 
    public function getJeux()
    {
        $catalogue=$this->model->getCatalogue();
        include_once('view\pageVente.php');
    }

    public function getJeuxAccueil()
    {
        $catalogue=$this->model->getCatalogue();
        include_once('view\accueil.php');
    }

    public function getBibliotheque(){
        $catalogue=$this->model->getCatalogue();
        include_once('view\bibliotheque.php');
    }


    public function getFavoris(){
        $catalogue=$this->model->getCatalogue();
        include_once('view\favoris.php');
    }

    public function getinfo(){

        if(isset($_SESSION['nom'])){
            $userConnecte = $_SESSION['nom'];


            $column_name = $userConnecte . "Panier";
            $panier = $this->model->getInfo($column_name);
            $_SESSION['panier'] = $panier;


           
            $column_name = $userConnecte . "Wish";
            $wish = $this->model->getInfo($column_name);
            $_SESSION['wish'] = $wish;


           
            $column_name = $userConnecte;
            $user= $this->model->getInfo($column_name);
            $_SESSION['biblio'] = $user;
            
        }
    }

    /* ACHAT/VENTE DE JEUX */
    public function buyGame() {
        
        if (isset($_POST['idJeu'])) {
            $idJeu = $_POST['idJeu'];
            $gamePrice = $this->model->findGame($idJeu);
            $userConnecte = $_SESSION['nom'];

            if (!isset($_POST['vendre'])) {
                $possession = true;
                $connecteMoney = $_SESSION['money'];
                $moneyConnecte = round($_SESSION['money'] - $gamePrice, 2);

            if ($gamePrice <= $connecteMoney) {
                
                $_SESSION['money'] = $moneyConnecte;
                $this->model->updateState($userConnecte, $idJeu, $possession);
                include_once('model/usersModel.php');
                $usersModel = new UsersModel();
                $usersModel->updateMoney($moneyConnecte, $userConnecte);
                
                echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";
            } else {
                
                $_SESSION['erreur_message'] = "Vous n'avez pas suffisament d'argent sur votre compte.";
               echo "<script>window.location.href = 'index.php?page=porte-monnaie';</script>";
               
            }
        } else {

            $_SESSION['money'] = $_SESSION['money'] + $gamePrice;
            $moneyConnecte = $_SESSION['money'];
            $possession = 0;
            include_once('model/usersModel.php');
                $usersModel = new UsersModel();
                $usersModel->updateMoney($moneyConnecte, $userConnecte);
                $this->model->updateState($userConnecte, $idJeu, $possession);
            
            echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";
        }
        }
    }


    /* AJOUTER/SUPPRIMER UN JEU DE SES FAVORIS */
    public function favGame() {
        
        if (isset($_POST['favoris'])) {
            $idJeu = $_POST['favoris'];
            $userConnecte = $_SESSION['nom']."Wish";
            $possession=true;
            $this->model->updateState($userConnecte, $idJeu, $possession);
            include_once('model/usersModel.php');
                $usersModel = new UsersModel();
                $this->model->updateState($userConnecte, $idJeu, $possession);
        echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";
        
    }elseif (isset($_POST['suppFav'])) {
        $idJeu = $_POST['suppFav'];
        $userConnecte = $_SESSION['nom']."Wish";
        $possession=0;
        $this->model->updateState($userConnecte, $idJeu, $possession);
        include_once('model/usersModel.php');
            $usersModel = new UsersModel();
            $this->model->updateState($userConnecte, $idJeu, $possession);
    echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";
}
    

   }


   public function getPanier(){
    $catalogue=$this->model->getCatalogue();
    include_once('view\panier.php');
}


/* AJOUTER/SUPPRIMER UN JEU DE SON PANIER */
   public function panierGame() {
        
    if (isset($_POST['panier'])) {
        $idJeu = $_POST['panier'];
        $userConnecte = $_SESSION['nom']."Panier";
        $possession=true;
        $this->model->updateState($userConnecte, $idJeu, $possession);
        include_once('model/usersModel.php');
            $usersModel = new UsersModel();
            $this->model->updateState($userConnecte, $idJeu, $possession);
            
    echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";

}elseif (isset($_POST['suppPanier'])) {
    $idJeu = $_POST['suppPanier'];
    $userConnecte = $_SESSION['nom']."Panier";
    $possession=0;
    $this->model->updateState($userConnecte, $idJeu, $possession);
    include_once('model/usersModel.php');
        $usersModel = new UsersModel();
        $this->model->updateState($userConnecte, $idJeu, $possession);
echo "<script>window.location.href = 'index.php?page=pageVente.$idJeu';</script>";
}


}

/* RECHERCHE DE JEUX */
public function getGameByName(){
    if(isset($_POST['nameGame'])){
        $nameGame = $_POST['nameGame'];
        
        $foundGames = $this->model->findGameByName($nameGame);

        if($foundGames){ ?>
            <h1 id="vosJeux">Vous avez recherchez "<?php echo $_POST['nameGame']?>":</h1>
<hr> <?php
            include_once('view/pageRecherche.php');
           
        } else {
            ?> 
            <div> 
                <h1 id="vosJeux">Vous avez recherché "<?php echo $_POST['nameGame']?>" :</h1> 
                <?php
                echo "Aucun jeu trouvé"; 
                ?> 
            </div> 
            <style>
                div{
                    text-align: center;
                    color: white;
                    font-family: 'Kdam Thmor Pro', sans-serif;
                }
            </style>
            <?php
        }
    } else {
        ?> 
        <div>
            <?php
            echo "PAS DE JEU TROUVÉ";
            ?> 
        </div>
        <?php
    }
}


}

