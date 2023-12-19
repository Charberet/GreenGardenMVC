<?php 

require_once 'model/produits_model.php';
require_once 'vues/produits_vue.php';

$produit = new Produit();

class ControleurProduits{

    private $produit;

    public function __construct()
    {
        $this->produit = new Produit();
    
    }


    public function affichageProduits($idProduit){

        $produit = $this->produit->getProduct($idProduit);
        $vue= new vue("produit");
        $vue->generer(array('produit' => $produit));

    }


    
}
?>