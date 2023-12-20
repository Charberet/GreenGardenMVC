<?php 

<<<<<<< Updated upstream:controller/addcategories_controller.php
require_once 'model/addcategories_model.php';
require_once 'vues/vue.php';
=======
require_once 'model/produits_model.php';
require_once 'model/categories_model.php';
require_once 'vues/produits_vue.php';
>>>>>>> Stashed changes:controller/categories_controller.php

$cat = new Categorie();

class ControleurCategories{

    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    
    }


<<<<<<< Updated upstream:controller/addcategories_controller.php

    
=======
        $categorie = $this->categorie->getCategory();
        $vue= new vue("categorie");
        $vue->generer(array('categorie' => $categorie));
    }    
>>>>>>> Stashed changes:controller/categories_controller.php
}
?>