<?php
require_once 'model/produits_model.php';
require_once 'model/categories_model.php';
require_once 'vues/vue.php';
require_once 'model/connexion_model.php';


class ControleurConnexion
{


 private $connexion ;

    public function getConnexion(){
        $vue = new vue("connexion");
        $vue->generer([]);
    }

    public function validerConnexion(){
        $this->connexion = new Connexion;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['connPseudo']) && isset($_POST['connPassword']) )  {

                $connPseudo = $_POST['connPseudo'];
                $connPassword = $_POST['connPassword'];
               
             

              if (strpos($this->connexion->checkConnexion( $connPseudo,$connPassword), "Mot de passe correct!") === 0) {
                $_SESSION['Login']=$connPseudo ;
                $_SESSION['userType']= substr($this->connexion->checkConnexion( $connPseudo,$connPassword), -1);
        
            }
            return  $this->connexion->checkConnexion( $connPseudo,$connPassword);
            }
        }
    }
}