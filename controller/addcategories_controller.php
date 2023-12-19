<?php 


require_once 'model/addcategories_model.php';
require_once 'vues/produits_vue.php';

$cat = new Categorie();

class ControleurCategories{

    private $categorie;

    public function __construct()
    {

        $this->categorie = new Categorie();

    }

    public function affichageCategorie(){

        $categorie = $this->categorie->getCategory();
        $vue= new vue("categorie");
        $vue->generer(array('categorie' => $categorie));

    }    
}
?>