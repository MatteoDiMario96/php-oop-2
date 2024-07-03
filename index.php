<?php 

require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/ProductsFood.php';
require_once __DIR__ . '/classes/ProductsToys.php';
require_once __DIR__ . '/classes/ProductsAccessories.php';

// Definizione delle categorie 
define("CAT_Dog", "Cane");
define("CAT_Cat", "Gatto");
define("CAT_Bird", "Uccelli");
define("CAT_Fish", "Pesci");

// Creazione dei prodotti 

$products = [
    new ProductsFood("Royal crocchette per bassotti", CAT_Dog, "12.95€", "26/12/2027", "17Kg"),
    new ProductsToys("Topo giocattolo", CAT_Cat, "1.50€", "Plastic", "2 years garanted"),
    new ProductsAccessories("Gabbia per uccelli", CAT_Bird, "39.95€", "Gabbia", "Media"),
    new ProductsFood("Purina cibo per gatti anziani", CAT_Cat, "14.95€", "26/10/2028", "13Kg"),
    new ProductsToys("Insetto giocattolo", CAT_Fish, "0.95€", "Plastic", "1 years garanted"),
    new ProductsAccessories("Guinzaglio", CAT_Dog, "9.95€", "Guinzaglio", "Taglia unica"),
    new ProductsToys("Pallina da tennis", CAT_Dog, "0.95€", "Plastic", "1 years garanted"),
    new ProductsAccessories("Acquario", CAT_Fish, "49.95€", "Acquario", "Grande"),
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">

    <title>Prodotti animali!</title>
</head>
<body>
    <main>
        <section>
            <?php foreach ($products as $key => $product) { ?>
                <div class="card">
                    <h3>
                        <?php echo $product->getName(); ?>
                    </h3>
                    <h4>
                        <?php echo $product->getCategory(); ?>
                    </h4>
                    <h4>
                        <?php echo $product->getPrice(); ?>
                    </h4>
                    <h4>
                        <?php if(method_exists($product, 'getExpire')){
                            echo $product->getExpire();
                        }; ?>
                        <?php if(method_exists($product, 'getMaterialType')){
                            echo $product->getMaterialType();
                        }; ?>
                        <?php if(method_exists($product, 'getType')){
                            echo $product->getType(); 
                        }; ?>
                    </h4>
                    <h4>
                        <?php if(method_exists($product, 'getWeight')){
                            echo $product->getWeight();
                        }; ?>
                        <?php if(method_exists($product, 'getDurabilty')){
                            echo $product->getDurability();
                        }; ?>
                        <?php if(method_exists($product, 'getSize')){
                            echo $product->getSize(); 
                        }; ?>
                    </h4>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>