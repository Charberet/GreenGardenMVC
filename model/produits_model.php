<?php
require_once 'model/bdd_model.php';
class Produit extends connectBDD
{

    function getProduct()
    {
        $sql = "SELECT * FROM t_d_produit";
        $products= $this->executeRequete($sql);
        return $products;
    }

    function getProductByCat($param)
    {
        $sql = "SELECT * FROM t_d_produit WHERE Id_Categorie = '$param'";
        return $this->executeRequete($sql);
    }

    function addProduct($addTaux_TVA,$addNom_Long,$addNom_court,$addRef_fournisseur,$addPhoto,$addPrix_Achat,$fournisseur,$categorie)
    {

        $sql = "INSERT INTO t_d_produit (`Taux_TVA`,`Nom_Long`,`Nom_court`,`Ref_fournisseur`,`Photo`,`Prix_Achat`,`Id_Fournisseur`,`Id_Categorie`) VALUES (?,?,?,?,?,?,?,?)";

        return $this->executeRequete($sql, array($addTaux_TVA,$addNom_Long,$addNom_court,$addRef_fournisseur,$addPhoto,$addPrix_Achat,$fournisseur,$categorie));
    }
    function deleteProdcut($produit)
    {

        $sql = "DELETE FROM t_d_produit WHERE Id_Produit = $produit";
        return $this->executeRequete($sql);
    }

    function getRef($param = []){

        $sql="SELECT * FROM t_d_produit where Ref_fournisseur = :ref";

        return $this->executeRequeteFetch($sql,$param);
    }



}
?>