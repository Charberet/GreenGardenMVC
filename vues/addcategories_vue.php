<form class="d-flex justify-content-center"  method="POST">

    <input type="text" name="addLibelle" placeholder="Nom de la catégorie" required>
    <select name="SelectCat">
        <option value="">Catégorie parent </option>
        <?php foreach ($category as $Cat) {
            if ($Cat['Id_Categorie_Parent'] == "") { ?>
                <option value="<?php print $Cat['Id_Categorie'] ?>"> <?php print $Cat['Libelle'] ?>

            <?php }
        } ?>
    </select>

    <button class="btn btn-success" type="submit" name="addCategory">Ajouter une catégorie</button>

</form>