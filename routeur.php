<?php

require_once 'controller/produits_controller.php';
require_once 'controller/categories_controller.php';
require_once 'controller/connexion_controller.php';
require_once 'vues/vue.php';


class routeur
{

    private $ctrlProduits;
    private $ctrlCategorie;
    private $ctrlConnexion;//
    public function __construct()
    {
        $this->ctrlProduits = new ControleurProduits();
        $this->ctrlCategorie = new ControleurCategories();
        $this->ctrlConnexion = new ControleurConnexion();//
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
                    case "connexion":
                        
                        $this->ctrlConnexion->getConnexion();
                        if(isset($_POST['connPseudo']) && isset($_POST['connPassword']) ){
                            
                        $result = $this->ctrlConnexion->validerConnexion($_POST['connPseudo'],$_POST['connPassword']);
                       
                        
                        }
                        break;
                        case "deconnexion":
                            session_destroy();
                            header('Location: index.php');
                            exit;
                            break;
                default:
                    $this->ctrlProduits->affichageProduits();
                    break;
            }
        }else if(isset($_GET['TrierCat'])){
            
            $this->ctrlCategorie->GetCatById($_GET['TrierCat']);
            $this->ctrlProduits->affichageProduitsById();
        }else{

            $this->ctrlProduits->affichageProduits();
        }
    }
    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}
