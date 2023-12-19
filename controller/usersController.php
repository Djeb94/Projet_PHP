<?php
include_once('model/usersModel.php');

class UsersController
{
    private $model;
    public function __construct()
    {
        $this->model = new UsersModel;
    }

    /**
     * INSCRIPTION
     */
    public function getFormInscription()
    {
        include_once('view/inscription.php');
    }


    public function setUser()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            
            $check = $this->model->getUserByUsername($username);
            $user=$this->model->getUserByEmail($email);
           
          if(!$check){
            if(!$user){
            $_SESSION['nom']=$username;
            $_SESSION['money']=50;
            $password = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
            if ($this->model->setUser($email,$password, $username)) {
               
                echo "<script>window.location.href = 'index.php?page=';</script>";
            } else {
                echo "<script>window.location.href = 'index.php?page=';</script>";
                $this->getFormInscription();
            }


        } $_SESSION['erreur_message'] = "Adresse email deja utilisé.";
            $this->getFormInscription();

    }else{
            $_SESSION['erreur_message'] = "Nom d'utilisateur deja utilisé.";
            $this->getFormInscription();
            
        }
    }else {
            $this->getFormInscription();


    
}}

    /**
     * Authentification
     */
    public function getFormAuthentification()
    {
        include_once('view/authentification.php');
    }
    public function getAuthentification()
    {
        if (isset($_POST['email'])) {
            $_SESSION['erreur_message'] = "";
            $email = $_POST['email'];
            
            $user=$this->model->getUserByEmail($email);
           

            if ($user) {
                $mdp=password_verify($_POST['mdp'], $user['password']);
                if($mdp){
                
                $_SESSION['nom']=$user['username'];
                $_SESSION['money']=$user['money'];
                echo "<script>window.location.href = 'index.php?page=';</script>";

                } $_SESSION['erreur_message'] = "Mot de passe invalide.";
                $this->getFormAuthentification();
                 
            } else {
                $_SESSION['erreur_message'] = "Utilisateur inconnu.";
                //echo "<script>window.location.href = 'index.php?page=authentification';</script>";
                
                $this->getFormAuthentification();
            }


        } else {
            $this->getFormAuthentification();
        }

        
    }


    /*AUGMENTER SON PORTE-MONNAIE */
    public function increaseMoney(){

        

        $userConnecte = $_SESSION['nom'];

        if(isset($_POST['cinq'])){
            $_SESSION['money'] = $_SESSION['money'] + 5;
            $monneyConnecte = $_SESSION['money'];
            $this->model->updateMoney($monneyConnecte, $userConnecte);
           // echo "<script>window.location.href = 'index.php?page=porte-monnaie';</script>";
        }

        elseif(isset($_POST['dix'])){
            $_SESSION['money'] = $_SESSION['money'] + 10;
            $monneyConnecte = $_SESSION['money'];
            $this->model->updateMoney($monneyConnecte, $userConnecte);
           // echo "<script>window.location.href = 'index.php?page=porte-monnaie';</script>";
        }

        elseif(isset($_POST['cinquante'])){
            $_SESSION['money'] = $_SESSION['money']+ 50;
            $monneyConnecte = $_SESSION['money'];
            $this->model->updateMoney($monneyConnecte, $userConnecte);
           // echo "<script>window.location.href = 'index.php?page=porte-monnaie';</script>";
        }

        elseif(isset($_POST['cent'])){
            $_SESSION['money'] = $_SESSION['money']+ 100;
            $monneyConnecte = $_SESSION['money'];
            $this->model->updateMoney($monneyConnecte, $userConnecte);
           // echo "<script>window.location.href = 'index.php?page=porte-monnaie';</script>";
        }

        include_once('view\porte-monnaie.php');
    }


}