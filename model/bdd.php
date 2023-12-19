<?php

class Bdd
{
    public static function connexion()
    {
        try {
            return new PDO("mysql:host=51.158.59.186:14301; dbname=GDjeb","phppex","Supermotdepasse!42");
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

}

$bdd = Bdd::connexion();