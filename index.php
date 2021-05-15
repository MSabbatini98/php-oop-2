<?php
include_once __DIR__ . '/classes/prodotto.class.php';

$item_0 = new Prodotto('Spazzola peli del cane', 'Spazzola riutilizzabile per peli del cane', 15.99);
$item_1 = new EcoFriendly('Borraccia', 'borraccia termica da 1l', 12.99, 'acciaio', 'blu');
$item_2 = new EcoFriendly('Cotton Fiock', 'Cotton fiock in bambu', 7.49, 'bambu e cotone', 'marrone & bianco');
$item_3 = new ReUse('Vaso da giardino', 'vaso da giardino rettangolare, 20x40x15cm', 5.35, 'come nuovo', 15);

$item  = [
    $item_0,
    $item_1,
    $item_2,
    $item_3,
];  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce w/ PHP </title>
</head>
<body>
    <div class="container">
        <ul>
            
            <?php foreach ($item as $element) { ?>
            
                <li>
                    <h2><?php echo $element->getNomeProdotto(); ?></h2>
                    <p> descrizione <?php echo $element-> description; ?> </p>
                    <p> prezzo <?php echo $element->setPrice(); ?></p>

                </li>
            
            <?php } ?>                
        </ul>
    </div>
</body>
</html>