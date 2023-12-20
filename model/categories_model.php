<?php 
require_once 'model/categories_model.php';
require_once 'model/bdd_model.php';

class Categorie extends connectBDD
{

function getCategoryParent($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Id_Categorie_Parent = '$var'";
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

function addCategory(){

    $sql="INSERT INTO t_d_categorie (`Libelle`,`Id_categorie_Parent`) VALUES (?,?)";
   
    return $this->executeRequete($sql,array($_POST['addLibelle'],$_POST['AddCatParent']));

}




}