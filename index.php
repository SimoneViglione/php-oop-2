<?php

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Dog.php'; 
require_once __DIR__ . '/Models/Cat.php'; 

    $ciboCani = new Dog();
    $ciboCani->productname = "Cibo per cani";
    $ciboCani->price = 15;
    $ciboCani->image = "./images/R.jpg";
    $ciboCani->type = "Cibo";
    $ciboCani->setCalories(130, 'kcal');

    try {
        $ciboCani->setPrice('ciao');
      } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
      }


    $ciboGatti = new Cat();
    $ciboGatti->productname = "Cibo per gatti";
    $ciboGatti->price = 15;
    $ciboGatti->image = "./images/E.jpg";
    $ciboGatti->type = "Cibo";
    $ciboGatti->setCalories(100, 'kcal');

    $giocoCani = new Dog();
    $giocoCani->productname = "Gioco per cani";
    $giocoCani->price = 8;
    $giocoCani->image = "./images/O.jpg";
    $giocoCani->type = "Giocattolo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-OOP-2 </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <main>
        <div class="container">
            <div class="card">
                <img class="product-image" src="<?php echo $ciboCani->image; ?>" />
                <h4> <?php echo $ciboCani->productname; ?> </h4>
                <h4> <?php echo $ciboCani->type; ?> </h4>
                <h4> <?php echo $ciboCani->price . "€"; ?> </h4>
                <h4> <?php echo $ciboCani->getCalories(); ?> </h4>
                <span class="icon"> <?php echo $ciboCani->dogIcon; ?> </span>
            </div>

            <div class="card">
                <img class="product-image" src="<?php echo $ciboGatti->image; ?>" />
                <h4> <?php echo $ciboGatti->productname; ?> </h4>
                <h4> <?php echo $ciboGatti->type; ?> </h4>
                <h4> <?php echo $ciboGatti->price . "€"; ?> </h4>
                <h4> <?php echo $ciboGatti->getCalories(); ?> </h4>
                <span class="icon"> <?php echo $ciboGatti->catIcon; ?> </span>
            </div>

            <div class="card">
                <img class="product-image" src="<?php echo $giocoCani->image; ?>" />
                <h4> <?php echo $giocoCani->productname; ?> </h4>
                <h4> <?php echo $giocoCani->type; ?> </h4>
                <h4> <?php echo $giocoCani->price . "€"; ?> </h4>
                <span class="icon"> <?php echo $giocoCani->dogIcon; ?> </span>
            </div>
        </div>
    </main>
    
</body>
</html>