<?php 

require_once 'model/addcategories_model.php';
require_once 'vues/vue.php';

$cat = new Categorie();

class ControleurCategories{

    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    
    }



    
}
?>