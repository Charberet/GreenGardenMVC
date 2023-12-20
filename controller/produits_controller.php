<?php
// require_once 'model/addcategories_model.php';
require_once 'model/produits_model.php';
require_once 'model/categories_model.php';
require_once 'vues/vue.php';

class ControleurProduits
{

    private $produit;
    private $categorie;
    private $triCategorie;

    public function __construct()
    {
        $this->produit = new Produit();
        $this->categorie = new Categorie();
        $this->triCategorie = new Categorie();
    }
    public function affichageProduits()
    {

        $product = $this->produit->getProduct();
        $categories = $this->categorie->getCategory();
        


        $vue = new vue("produits");
        $vue->generer(array('products' => $product, 'category'=>$categories));
    }
}