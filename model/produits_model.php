
<?php
require_once 'model/bdd_model.php';
class Produit extends connectBDD
{

    function getProduct()
    {
        $sql = "SELECT * FROM t_d_produit";
        return $this->execute($sql);
    }

    function getProductByCat($param)
    {
        $sql = "SELECT * FROM t_d_produit WHERE Id_Categorie = '$param'";
        return $this->execute($sql);
    }

    function addProduct()
    {

        $sql = "INSERT INTO t_d_produit (`Taux_TVA`,`Nom_Long`,`Nom_court`,`Ref_fournisseur`,`Photo`,`Prix_Achat`,`Id_Fournisseur`,`Id_Categorie`) VALUES (?,?,?,?,?,?,?,?)";

        return $this->execute($sql, array($_POST['addTaux_TVA'], $_POST['addNom_Long'], $_POST['addNom_court'], $_POST['addRef_fournisseur'], $_POST['addPhoto'], $_POST['addPrix_Achat'], $_POST['fournisseur'], $_POST['categorie']));
    }
    function deleteProdcut($produit)
    {

        $sql = "DELETE FROM t_d_produit WHERE Id_Produit = $produit";
        return $this->execute($sql);
    }
}
?>