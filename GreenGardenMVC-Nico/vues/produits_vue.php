

<form method="">
    <select onchange="submit()" name="TrierCat" class="form-select form-select-lg mb-3 selectpicker">
        <option value="all">Selectionnez une catégorie...</option>
        <?php foreach ($category as $valuesParent) { ?>
            <?php if ($valuesParent['Id_Categorie_Parent'] == "") { ?>
                <optgroup label="<?php print $valuesParent['Libelle'] ?>"><?php } ?>

                <?php foreach ($category as $valuesChild) { ?>
                    <?php if ($valuesChild['Id_Categorie_Parent'] != "" && $valuesChild['Id_Categorie_Parent'] == $valuesParent['Id_Categorie']) { ?>
                        <option value="<?= "index.php?action=category&id=".$valuesChild['Id_Categorie']?>" <?php echo ($category == $valuesChild['Id_Categorie']) ? 'selected' : ''; ?> <?php print $valuesChild['Libelle']; ?></option>
          
            <?php }
                }
            } ?>
                </optgroup>
    </select>
</form>
        


<div class=" d-flex flex-wrap">
    <?php foreach ($products as $product) { ?>
        <div class="card m-3" id="<?php echo $product['Id_Produit'] ?>" style="width: 18rem;">
            <h5 class="card-title d-flex justify-content-center mt-2 text-white"><?php echo $product['Nom_court'] ?></h5>
            <img src="./images/depositphotos_64645823-stock-photo-paleo-diet-products.jpg" class="card-img-top" alt="photo">
            <div class="card-body d-flex flex-column justify-content-center">
                <p class="card-text d-flex justify-content-center text-white"><?php echo $product['Nom_Long'] ?></p>
                <p class="card-text d-flex justify-content-center text-white"><?php echo $product['Prix_Achat'] ?> €</p>

                <form class="d-flex flex-column justify-content-center" method="POST">
                    <button type="submit" name="addToCart" id="addToCart" class="btn btn-dark ">Ajouter au panier</button>
                </form>
            </div>
        </div>
    <?php } ?>
