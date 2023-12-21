<form class="d-flex justify-content-center" method="POST">

    <input type="text" name="addNom_court" placeholder="Nom court" required>
    <input type="text" name="addNom_Long" placeholder="Nom long" required>
    <input type="text" name="addTaux_TVA" placeholder="Taux TVA" required>
    <input type="text" name="addRef_fournisseur" placeholder="Ref fournisseur" required>
    <input type="text" name="addPhoto" placeholder="Photo" required>
    <input type="text" name="addPrix_Achat" placeholder="Prix achat" required>
    <select name="fournisseur" required>
        <?php foreach ($fournisseur as $value) { ?>
            <option value="<?php print $value['Id_Fournisseur']; ?>"> <?php print $value['Nom_Fournisseur']; ?></option>
        <?php } ?>
    </select>
    <select name="categorie">

        <?php foreach ($category as $values) {
            if ($values['Id_Categorie_Parent'] != "") { ?>
                <option value="<?php print $values['Id_Categorie']; ?>"> <?php print $values['Libelle']; ?></option>
        <?php }
        } ?>

    </select>
    <button class="btn btn-success" type="submit" name="addProduct">Ajouter un produit</button>
</form> 