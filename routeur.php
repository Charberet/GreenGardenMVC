<?php

require_once 'controller/produits_controller.php';
<<<<<<< Updated upstream
require_once 'vues/vues.php';
=======
// require_once 'controller/categories_controller.php';
require_once 'vues/vue.php';
>>>>>>> Stashed changes

class routeur
{

    private $ctrlProduits;

    public function __construct()
    {
        $this->ctrlProduits = new ControleurProduits();
    }

    // Traite une requête entrante
    public function routerRequete()
    {

        try {
<<<<<<< Updated upstream
            if (isset($_POST['TrierCat'])) {
                if ($_GET['TrierCat'] == "") {
                    if (isset($_GET['id'])) {

                        $this->ctrlProduits->affichageProduits($_POST['TrierCat']);
                    }
                }
            }
=======
            $this->ctrlProduits->affichageProduits();
>>>>>>> Stashed changes
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }
    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}
