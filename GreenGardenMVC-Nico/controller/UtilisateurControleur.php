<?php

require_once 'UtilisateurModel.php';

class UtilisateurController {
    private $utilisateurModel;

    public function __construct($bdd) {
        $this->utilisateurModel = new UtilisateurModel($bdd);
    }

    public function afficherFormulaireInscription() {
        // Afficher la vue du formulaire d'inscription
        include './vues/inscription.php';
    }

    public function traiterInscription($login, $motDePasse) {
        // Valider les données du formulaire si nécessaire

        // Enregistrer l'utilisateur dans la base de données
        $this->utilisateurModel->enregistrerUtilisateur();

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page
    }

    public function afficherFormulaireConnexion() {
        // Afficher la vue du formulaire de connexion
        include './vues/connexion.php';
    }

    public function traiterConnexion() {
        // Valider les données du formulaire si nécessaire

        // Vérifier les informations de connexion
        if ($this->utilisateurModel->verifierConnexion($login, $motDePasse)) {
            // Utilisateur connecté, rediriger vers une page d'accueil ou autre
            echo "Connexion réussie";
        } else {
            // Afficher un message d'erreur
            echo "Échec de la connexion";
        }
    }
}