<?php
require_once 'model/Model.php';
class User extends connectBDD
{
    function addUser()
    {

        $sql = "INSERT INTO t_d_user (`Login`,`Password`) VALUES (?,?)";
        $password_hash = password_hash($_POST['inscPassword'], PASSWORD_DEFAULT);
        $params = array($_POST['inscPseudo'], $password_hash);
        $this->executeRequete($sql, $params);

        $sql1 = "INSERT INTO t_d_client (`Id_Client`,`Nom_Client`,`Prenom_Client`,`Mail_Client`,`Tel_Clcient`,`Id_Type_Client`) VALUES (?,?,?,?,?,?)";
        $params = array(NULL, $_POST['inscNom'], $_POST['inscPrenom'], $_POST['inscEmail'], $_POST['inscTel'], 1);
        $this->executeRequete($sql1, $params);

        // $sql2="INSERT INTO t_d_adresse (`Id_Adresse`,`Ligne1_adresse`,`CP_Adresse`,`Ville_Adresse`,`Id_Client`) VALUES (?,?,?,?,?)";
        // $query=$this->bdd->prepare($sql2);
        // $query->execute(array(NULL,$_POST['inscAdresse'],$_POST['inscCP'],$_POST['inscVille'],NULL));


    }

    function getUser($pseudo)
    {

        $sql = "SELECT * FROM t_d_user WHERE Login = ?";
        $params = array($pseudo);
        return $this->executeRequete($sql, $params);
    }

    function getUserAll()
    {

        $sql = "SELECT * FROM t_d_user ";
        $users = $this->executeRequete($sql);
        return $users;
    }
}
