<?php

abstract class connectBDD
{
    private $bdd;

    private function getBdd(): PDO
    {
        if ($this->bdd == null) {
            $this->bdd = new PDO("mysql:host=127.0.0.1:3306;dbname=greengarden;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
    protected function executeRequete($sql, $params = null)
    {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        
        } else {
            $resultat = $this->getBdd()->prepare($sql); // requête préparée
            $resultat->execute($params);
        }
        return $resultat->fetchAll();
    }
    protected function executeRequeteFetchAll($sql)
    {

            $resultat = $this->getBdd()->prepare($sql); // requête préparée
            $resultat->execute();
        
        return $resultat->fetchAll();
    }
}