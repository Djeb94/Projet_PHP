<?php
include_once('bdd.php');

class CatalogueModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    /* CATALOGUE ET TRI DU CATALOGUE*/
    public function getCatalogue()
    {
        return $this->bdd->query("SELECT * FROM test ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatalogueByMax()
    {
        return $this->bdd->query("SELECT * FROM test ORDER BY price DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatalogueByMin()
    {
        return $this->bdd->query("SELECT * FROM test ORDER BY price")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatalogueByDate()
    {
        return $this->bdd->query("SELECT * FROM test ORDER BY dateSortie DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatalogueByRate()
    {
        return $this->bdd->query("SELECT * FROM test ORDER BY rate DESC")->fetchAll(PDO::FETCH_ASSOC);
    }


    /* RECHERCHE ET ETAT DU JEU*/
    public function getInfo($column_name)
{
    $query = "SELECT COUNT(*) as count FROM test WHERE $column_name = true";
    $statement = $this->bdd->prepare($query);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return isset($result['count']) ? (int)$result['count'] : 0;
}

   

    public function findGame($idJeu) {
        try {
            $stmt = $this->bdd->prepare("SELECT price FROM test WHERE id = :id");
            $stmt->bindParam(':id', $idJeu, PDO::PARAM_INT);
            $stmt->execute();
    
           
            if ($stmt) {
                $gamePrice = $stmt->fetchColumn();
                return $gamePrice;
            } else {
                throw new Exception("La requête SQL a échoué.");
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

/* AJOUER/SUPPRIMER LE JEU POUR L'UTILISATEUR */
    public function updateState($userConnecte, $idJeu, $possession){
        
        $newGame = $this->bdd->prepare("UPDATE test SET $userConnecte = $possession WHERE id = $idJeu");  
        $newGame->execute(); 
        
             
    }


    
    public function findGameByName($nameGame){
        $nameGame = trim($nameGame); 
        $query = "SELECT * FROM test WHERE name LIKE :name";
        $statement = $this->bdd->prepare($query);
        $searchTerm = "%$nameGame%";
        $statement->bindParam(':name', $searchTerm, PDO::PARAM_STR);
        $statement->execute();
    
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    



    }
    

    
    





