<?php

require_once 'controller/produits_controller.php';
require_once 'vues/vues.php';

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
            if (isset($_POST['TrierCat'])) {
                if ($_GET['TrierCat'] == "") {
                    if (isset($_GET['id'])) {

                        $this->ctrlProduits->affichageProduits($_POST['TrierCat']);
                    }
                }
            }
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
