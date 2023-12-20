<?php

require_once 'model/produits_model.php';
require_once 'model/categories_model.php';
require_once 'vues/vue.php';

$cat = new Categorie();

class ControleurCategories
{

    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    }
    public function affichageProduits()
    {
        $categorie = $this->categorie->addCategory();
        $vue = new vue("addcategorie");
        $vue->generer(array('categorie' => $categorie));
    }
}
