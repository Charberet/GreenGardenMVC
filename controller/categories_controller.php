
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


    public function addCat()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['addCategory'])) {
                $addLibelle = $_POST['addLibelle'];
                $SelectCat = $_POST['SelectCat'];
                $result = $this->categorie->getCategoryPrecis(['Nom' => $addLibelle]);
                if ($result == "") {
                    $this->categorie->addCategory($addLibelle, $SelectCat);
                } else {
                }
            }
        }
        $categories = $this->categorie->getCategory();
        $vue = new vue("addcategories");
        $vue->generer(array('category' => $categories));
    }

    public function GetCatById($param){

        if($param == "all"){

            $this->categorie->getCategory();


        }else{

               $this->categorie->getCategoryById($param);
  
        }
    

   
    
    }
}
