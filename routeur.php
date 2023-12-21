<?php

require_once 'controller/produits_controller.php';
require_once 'controller/categories_controller.php';
require_once 'vues/vue.php';


class routeur
{

    private $ctrlProduits;
    private $ctrlCategorie;

    public function __construct()
    {
        $this->ctrlProduits = new ControleurProduits();
        $this->ctrlCategorie = new ControleurCategories();
    }

    // Traite une requête entrante
    public function routerRequete()
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "addproduct":
                    $this->ctrlProduits->addProduit();
                    break;
                case "addcategories":
                    $this->ctrlCategorie->addCat();
                    break;
                default:
                    $this->ctrlProduits->affichageProduits();
                    break;
            }
        }else if(isset($_GET['TrierCat'])){
            switch ($_GET['TrierCat']) {
            }
        }else{
            $this->ctrlProduits->affichageProduits();
        }
        
         
switch(($_GET['action'])){
    case "addproduct":
        $this->ctrlProduits->addProduit();
        break;
    case "addcategories":
        $this->ctrlCategorie->addCat();
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
