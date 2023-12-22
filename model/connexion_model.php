<?php 

require_once 'model/bdd_model.php';

class Connexion extends connectBDD
{

   
    function checkConnexion($pseudo,$password)
    {

        $sql = 'SELECT t_d_user.Password,t_d_user.Id_UserType
        FROM t_d_user   
        WHERE t_d_user.Login = :login';

// Récupérer le résultat de la requête
$result = $this->executeRequeteFetch($sql, [':login' => $pseudo]);

if ($result) {
    // $result['Password'] contient le mot de passe hashé de la base de données
    $hashedPasswordFromDatabase = $result['Password'];

    // Utilisez password_verify pour vérifier le mot de passe
    if (password_verify($password, $hashedPasswordFromDatabase)) {
        return "Mot de passe correct!". $result['Id_UserType'];
    } else {
        return "Utilisateur  ou mot de passe incorrect!";
    }
} else {
    return "Utilisateur  ou mot de passe incorrect!";
}

           return $this->executeRequete($sql,array($pseudo,$password));
    }

}