
<main class="container">


        <div class=" d-flex flex-wrap">


            <?php foreach ($produit as $product) { ?>

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

    </main>
