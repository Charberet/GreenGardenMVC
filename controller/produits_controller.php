<?php

require_once 'model/produits_model.php';
require_once 'model/categories_model.php';
require_once 'vues/vue.php';
require_once 'model/fournisseurs_model.php';

class ControleurProduits
{

    private $produit;
    private $categorie;
    private $fournisseur;

    public function __construct()
    {
        $this->produit = new Produit();
        $this->categorie = new Categorie();
        $this->fournisseur = new Fournisseur();
    }
    public function affichageProduits()
    {

        $product = $this->produit->getProduct();
        $categories = $this->categorie->getCategory();
        $vue = new vue("produits");
        $vue->generer(array('products' => $product, 'category' => $categories));
    }
    public function affichageProduits()
    {

        $product = $this->produit->getProduct();
        $categories = $this->categorie->getCategory();
    }

    public function addProduit()
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['addProduct'])) {

                $addTaux_TVA = $_POST['addTaux_TVA'];
                $addNom_Long = $_POST['addNom_Long'];
                $addNom_court = $_POST['addNom_court'];
                $addRef_fournisseur = $_POST['addRef_fournisseur'];
                $addPhoto = $_POST['addPhoto'];
                $addPrix_Achat = $_POST['addPrix_Achat'];
                $fournisseur = $_POST['fournisseur'];
                $categorie = $_POST['categorie'];
                $result = $this->produit->getRef(['ref' => $addRef_fournisseur]);

if($result > 0){

}else{
    $this->produit->addProduct($addTaux_TVA,$addNom_Long,$addNom_court,$addRef_fournisseur,$addPhoto,$addPrix_Achat,$fournisseur,$categorie);
}
                // 

            }
        }
        $fournisseurs = $this->fournisseur->getFournisseur();
        $categories = $this->categorie->getCategory();
        $vue = new vue("addproduct");
        $vue->generer(array('category' => $categories, 'fournisseur' => $fournisseurs));
    }
}
