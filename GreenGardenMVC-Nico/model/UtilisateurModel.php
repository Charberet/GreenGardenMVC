<?php

class UtilisateurModel {
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function enregistrerUtilisateur($login, $motDePasse) {
        $hashedPassword = password_hash($motDePasse, PASSWORD_DEFAULT);

        $query = $this->bdd->prepare('INSERT INTO t_d_user (Login, Password) VALUES (?, ?)');
        $query->execute([$login, $hashedPassword]);
    }

    public function verifierConnexion($login, $motDePasse) {
        $query = $this->bdd->prepare('SELECT * FROM t_d_user WHERE Login = ?');
        $query->execute([$login]);
        $utilisateur = $query->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur && password_verify($motDePasse, $utilisateur['Password'])) {
            return true; // Les informations de connexion sont correctes
        } else {
            return false; // Les informations de connexion sont incorrectes
        }
    }
}