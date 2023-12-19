<?php 
require_once 'model/addcategories_model.php';

class Categorie extends connectBDD
{

function getCategoryParent($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Id_Categorie_Parent = '$var'";
    return $this->execute($sql);

}

function getCategoryPrecis($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Libelle = '$var'";
    return $this->execute($sql);

}

function getCategoryChild($var){

    $sql = "SELECT * FROM t_d_categorie WHERE Libelle = '$var'";
    return $this->execute($sql);

}

function getCategory(){

    $sql = "SELECT * FROM t_d_categorie";
    return $this->execute($sql);

}

function addCategory(){

    $sql="INSERT INTO t_d_categorie (`Libelle`,`Id_categorie_Parent`) VALUES (?,?)";
   
    return $this->execute($sql,array($_POST['addLibelle'],$_POST['AddCatParent']));

}


}