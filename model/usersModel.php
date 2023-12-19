<?php
include_once('bdd.php');

class UsersModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd=Bdd::connexion();
    }

    public function getUsers()
    {
        return $this->bdd->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUserByUsername($username){
        return $this->bdd->query("SELECT * FROM users where username = '$username'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);

    }

    /* INSCRIPTION */
    public function setUser($email,$password, $username)
    {
        $addColumn = $this->bdd->prepare("ALTER TABLE test ADD COLUMN $username BOOL");
        $addColumn->execute();
        
        $column_name = $username . "Wish";
        $addWishColumn = $this->bdd->prepare("ALTER TABLE test ADD COLUMN $column_name BOOL");
        $addWishColumn->execute();

        $column_name = $username . "Panier";
        $addPanierColumn = $this->bdd->prepare("ALTER TABLE test ADD COLUMN $column_name BOOL");
        $addPanierColumn->execute();


        $setUser = $this->bdd->prepare("INSERT INTO users (email, password, username, money) VALUES (?, ?, ?, 50)");
        $setUser->execute([$email, $password, $username]);
         
    }

/* AJOUTER/ENLEVER DE L'ARGENT A L'UTILISATEUR */
    public function updateMoney($moneyConnecte, $userConnecte){

        $updateMoney = $this->bdd->prepare("UPDATE users SET money = $moneyConnecte  WHERE username = '$userConnecte' ");
        $updateMoney->execute();
    }
    

}


 