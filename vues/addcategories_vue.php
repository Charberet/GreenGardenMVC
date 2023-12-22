<form class="d-flex justify-content-center" method="GET">

    <input type="text" name="addLibelle" placeholder="Nom de la catégorie" required>
    <select name="AddCatParent">
        <option value="0">Catégorie parent </option>
        <?php foreach ($addcategorie as $Cat) {
            if ($Cat['Id_Categorie_Parent'] == "") { ?>
                <option value="<?php print $Cat['Id_Categorie'] ?>"> <?php print $Cat['Libelle'] ?>

            <?php }
        } ?>
    </select>

    <button class="btn btn-success" type="submit" name="addCategory">Ajouter une catégorie</button>
    
</form>