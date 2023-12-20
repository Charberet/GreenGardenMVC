<?php

require_once 'controller/produits_controller.php';
require_once './controller/UtilisateurControleur.php';

// require_once 'controller/categories_controller.php';
require_once 'vues/vue.php';

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
            $this->ctrlProduits->affichageProduits();
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

   

// Créez une connexion à la base de données ici et passez-la au contrôleur et au modèle si nécessaire
// $bdd = new PDO("mysql:host=localhost;dbname=votre_base_de_donnees;charset=utf8", 'votre_utilisateur', 'votre_mot_de_passe');

$utilisateurController = new UtilisateurController($bdd);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'inscription') {
        $utilisateurController->traiterInscription();
        
    } elseif ($_GET['action'] == 'connexion') {
        $utilisateurController->traiterConnexion();
    }
} else {
    // Afficher la page d'accueil ou autre
    // Vous pourriez également ajouter une logique pour afficher le formulaire de connexion par défaut
    $utilisateurController->afficherFormulaireConnexion();
}

