<?php 

require_once 'model/bdd_model.php';

class Categorie extends connectBDD
{

function getCategoryParent($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Id_Categorie_Parent = '$var'";
    return $this->executeRequete($sql);

}

function getCategoryById($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Id_Categorie = '$var'";
    return $this->executeRequete($sql);

}

function getCategoryPrecis($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Libelle = '$var'";
    return $this->executeRequete($sql);

}

function getCategoryChild($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Libelle = '$var'";
    return $this->executeRequete($sql);

}

function getProductByCat($param)
{
    $sql = "SELECT * FROM t_d_produit WHERE Id_Categorie = '$param'";
    return $this->executeRequete($sql);
}

function getCategory(){

    $sql = "SELECT * FROM t_d_categorie";
    return $this->executeRequete($sql);

}

function getCategoryToAdd($param = []){

    $sql = "SELECT * FROM t_d_categorie WHERE Id_Categorie = :ref ";
    return $this->executeRequete($sql,$param);

}

function addCategory($addLibelle,$AddCatParent){

    $sql="INSERT INTO t_d_categorie (`Libelle`,`Id_categorie_Parent`) VALUES (?,?)";
   
    return $this->executeRequete($sql,array($addLibelle,$AddCatParent));

}
}