<?php

require_once 'model/bdd_model.php';
require_once 'controller/produits_controller.php';
require_once 'vues/vue.php';

class routeur
{

    private $ctrlProduits;

    public function __construct()
    {
        $this->ctrlProduits = new ControleurProduits();
    }

    // Traite une requête entrante
    public function routerRequete()
    {

        try {
            

                        $this->ctrlProduits->affichageProduits();
                
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }
    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}
