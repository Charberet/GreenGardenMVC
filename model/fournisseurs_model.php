<?php
require_once 'model/bdd_model.php';
class Fournisseur extends connectBDD
{

    function getFournisseur(){

        $sql="SELECT * FROM t_d_fournisseur";
        return $this->executeRequete($sql);
    }

}
?>