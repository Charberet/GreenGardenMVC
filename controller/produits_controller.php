<?php 

require_once 'model/produits_model.php';
require_once 'vues/produits_vue.php';

$prod = new Produit();

class ControleurProduits{

    private $produit;

    public function __construct()
    {
        $this->produit = new Produit();
    
    }


    public function affichageProduits(){

        $produit = $this->produit->getProduct();
        $vue= new vue("produit");
        $vue->generer(array('produit' => $produit));

    }


    
}
?>