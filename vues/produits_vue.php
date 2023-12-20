<?php $titre = "produits".$produit; ?>

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

        <form method="POST" action="">
            <select name="TrierCat" class="form-select form-select-lg mb-3 selectpicker">
                <option value="">Selectionnez une catégorie...</option>
                <?php foreach ($dao->getCategory() as $valuesParent) { ?>
                    <?php if ($valuesParent['Id_Categorie_Parent'] == "") { ?>
                        <optgroup label="<?php print $valuesParent['Libelle'] ?>"><?php } ?>

                        <?php foreach ($dao->getCategory() as $valuesChild) { ?>
                            <?php if ($valuesChild['Id_Categorie_Parent'] != "" && $valuesChild['Id_Categorie_Parent'] == $valuesParent['Id_Categorie']) { ?>
                                <option value="<?php print $valuesChild['Id_Categorie']; ?>"> <?php print $valuesChild['Libelle']; ?></option>
                    <?php }
                        }
                    } ?>
                        </optgroup>
            </select>
            <button type="submit" name="btnTri" value="" class="btn btn-success ">Trier les catégories</button>
        </form>



<div class=" d-flex flex-wrap">
    <?php foreach ($products as $product) { ?>
        <div class="card m-3" id="<?php echo $product['Id_Produit'] ?>" style="width: 18rem;">
            <h5 class="card-title d-flex justify-content-center mt-2 text-white"><?php echo $product['Nom_court'] ?></h5>
            <img src="./images/depositphotos_64645823-stock-photo-paleo-diet-products.jpg" class="card-img-top" alt="photo">
            <div class="card-body d-flex flex-column justify-content-center">
                <p class="card-text d-flex justify-content-center text-white"><?php echo $product['Nom_Long'] ?></p>
                <p class="card-text d-flex justify-content-center text-white"><?php echo $product['Prix_Achat'] ?> €</p>

<<<<<<< Updated upstream
            <?php
            if (isset($_POST['TrierCat'])) {
                if ($_POST['TrierCat'] == "") {
                    foreach ($dao->getProduct() as $product) { ?>

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
<?php }
                            }
                        } else {

                            foreach ($dao->getProductByCat($_POST['TrierCat']) as $product) {
?>
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
<?php }
                            }
                        }
                    }
?>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalModification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifications du produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex flex-column justify-content-center" method="POST">

                    <input type="text" name="addNom_court" placeholder="Nom court" required>
                    <input type="text" name="addNom_Long" placeholder="Nom long" required>
                    <input type="text" name="addTaux_TVA" placeholder="Taux TVA" required>
                    <input type="text" name="addRef_fournisseur" placeholder="Ref fournisseur" required>
                    <input type="text" name="addPhoto" placeholder="Photo" required>
                    <input type="text" name="addPrix_Achat" placeholder="Prix achat" required>
                    <select name="fournisseur" required>
                        <?php foreach ($dao->getFournisseur() as $value) { ?>
                            <option value="<?php print $value['Id_Fournisseur']; ?>"> <?php print $value['Nom_Fournisseur']; ?></option>

                        <?php } ?>
                    </select>
                    <select name="categorie">

                        <?php foreach ($dao->getCategory() as $values) {
                            if ($values['Id_Categorie_Parent'] != "") { ?>

                                <option value="<?php print $values['Id_Categorie']; ?>"> <?php print $values['Libelle']; ?></option>

                        <?php }
                        } ?>

                    </select>
                    <button class="btn btn-success" type="submit" name="addProduct">Ajouter un produit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Sauvegarder les modifications</button>
            </div>
        </div>
    </div>
</div>

    </main>
=======
                <form class="d-flex flex-column justify-content-center" method="POST">
                    <button type="submit" name="addToCart" id="addToCart" class="btn btn-dark ">Ajouter au panier</button>
                </form>
            </div>
        </div>
    <?php } ?>
>>>>>>> Stashed changes
