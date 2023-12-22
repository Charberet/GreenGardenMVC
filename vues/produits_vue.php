<form method="">
    <select onchange="submit()" name="TrierCat" class="form-select form-select-lg mb-3 selectpicker">
        <option value="all">Selectionnez une catégorie...</option>
        <?php foreach ($category as $valuesParent) { ?>
            <?php if ($valuesParent['Id_Categorie_Parent'] == "") { ?>
                <optgroup label="<?php print $valuesParent['Libelle'] ?>"><?php } ?>

                <?php foreach ($category as $valuesChild) { ?>
                    <?php if ($valuesChild['Id_Categorie_Parent'] != "" && $valuesChild['Id_Categorie_Parent'] == $valuesParent['Id_Categorie']) { ?>
                        <option value="<?= $valuesChild['Id_Categorie'] ?>" <?php if (isset($_GET["TrierCat"]) && $_GET["TrierCat"] == $valuesChild["Id_Categorie"]) { ?>selected<?php } ?>> <?php print $valuesChild['Libelle'] ?> </option>

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

                
          
        
        <?php if ($_SESSION != null) {
                                    if ($_SESSION['userType'] == 2) { ?>
                                        <form class="d-flex flex-column justify-content-center" method="POST">
                                            <button type="submit" name="addToCart" id="addToCart" class="btn btn-dark mb-2">Ajouter au panier</button>
                                        </form>
                                        <form class="d-flex flex-column justify-content-center mb-2" method="POST">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalModification">Modifier le produit</button>
                                        </form>
                                        <form class="d-flex flex-column justify-content-center" method="POST" action="./pages/supprProduit.php">
                                            <button type="submit" name="deleteProduct" value="<?php echo $product['Id_Produit'] ?>" class="btn btn-danger ">Supprimer le produit</button>
                                        </form>
                            </div>
                        </div>
                    <?php } else { ?>
                        <form class="d-flex flex-column justify-content-center" method="POST">
                            <button type="submit" name="addToCart" id="addToCart" class="btn btn-dark ">Ajouter au panier</button>
                        </form>
        </div>
        </div>
    <?php }
                                } else { ?>

    <form class="d-flex flex-column justify-content-center" method="POST">
        <button type="submit" name="addToCart" id="addToCart" class="btn btn-dark ">Ajouter au panier</button>
    </form>
    </div>
    </div>
<?php } }?>