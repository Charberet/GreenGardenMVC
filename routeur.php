<?php

require_once 'controller/produits_controller.php';
require_once 'controller/categories_controller.php';
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
switch(isset($_GET['action'])){
    case "addproduct":
        $this->ctrlProduits->addProduit();
        break;
        default:
            $this->ctrlProduits->affichageProduits();
            break;
}

    }
    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}
