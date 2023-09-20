<?php
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/DogHouse.php';
require_once __DIR__ . '/classes/Toys.php';

$Toys1 = new Toys(_name: 'Pallina', _material: 'Plastica', _description: 'Pallina per cani', _price: '1.20', _img: 'https://www.shoppypet.com/5455-thickbox_default/ferplast-pa-6060-pallina-per-cani-in-vinile.jpg', _species: 'cane');
$Toys2 = new Toys(_name: 'Corda', _material: 'Tessuto', _description: 'Corda per cani', _price: '3.20', _img: 'https://www.shoppypet.com/4516-thickbox_default/ferplast-pa-6519-gioco-corda-per-cani.jpg', _species: 'cane');
$DogHouse1 = new DogHouse(_name: 'Cuccia', _material: 'Pvc', _description: 'Cuccia smontabile per cani', _price: '50.00', _img: 'https://www.shoppypet.com/5102-thickbox_default/ferplast-kenny-cuccia-per-cani-in-termoplastica.jpg', _species: 'cane');
$DogHouse2 = new DogHouse(_name: 'Trasportino', _material: 'Plastica rigida', _description: 'Trasportino per gatti', _price: '80.00', _img: 'https://www.shoppypet.com/3154-thickbox_default/ferplast-atlas-deluxe-open-trasportino-gatti-e-cani.jpg', _species: 'gatto');
$Food1 = new Food(_name: 'Croccantini', _composition: 'Carne', _description: 'Croccantini', _price: '10.00', _img: 'https://www.shoppypet.com/840-thickbox_default/alimento-royal-canin-maxi-light-weight-care.jpg', _species: 'cane');
$Food2 = new Food(_name: 'Pesce in scatola', _composition: 'Pesce', _description: 'Pesce in scatola per gatti', _price: '10.00', _img: 'https://www.shoppypet.com/704-thickbox_default/naturelcat-lattine-70gr-alimento-umido-per-gatti.jpg', _species: 'gatto');

$toysArray = array($Toys1, $Toys2);
$DogHousesArray = array($DogHouse1, $DogHouse2);
$FoodsArray = array($Food1, $Food2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center">Toys</h1>
        <div class="row justify-content-center">
            <?php foreach ($toysArray as $toy) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $toy->getImg(); ?>" class="card-img-top" alt="Toy Image">
                        <div class="card-body text-center">
                            <?php if ($toy->getSpecies() === 'cane') { ?>
                                <i class="fa-solid fa-shield-dog"></i>
                            <?php } elseif ($toy->getSpecies() === 'gatto') { ?>
                                <i class="fa-solid fa-shield-cat"></i>
                            <?php } ?>
                            <h2 class="card-title"><?php echo $toy->getName(); ?></h2>
                            <p class="card-text">Material: <?php echo $toy->getMaterial(); ?></p>
                            <p class="card-text">Description: <?php echo $toy->getDescription(); ?></p>
                            <p class="card-text">Price: $<?php echo $toy->getPrice(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h1 class="text-center">Houses</h1>
        <div class="row justify-content-center">
            <?php foreach ($DogHousesArray as $DogHouse) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card ">
                        <img src="<?php echo $DogHouse->getImg(); ?>" class="card-img-top" alt="Dog House Image">
                        <div class="card-body text-center">
                            <?php if ($DogHouse->getSpecies() === 'cane') { ?>
                                <i class="fa-solid fa-shield-dog"></i>
                            <?php } elseif ($DogHouse->getSpecies() === 'gatto') { ?>
                                <i class="fa-solid fa-shield-cat"></i>
                            <?php } ?>
                            <h2 class="card-title"><?php echo $DogHouse->getName(); ?></h2>
                            <p class="card-text">Material: <?php echo $DogHouse->getMaterial(); ?></p>
                            <p class="card-text">Description: <?php echo $DogHouse->getDescription(); ?></p>
                            <p class="card-text">Price: $<?php echo $DogHouse->getPrice(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h1 class="text-center">Foods</h1>
        <div class="row justify-content-center">
            <?php foreach ($FoodsArray as $Food) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $Food->getImg(); ?>" class="card-img-top" alt="Food Image">
                        <div class="card-body text-center">
                            <?php if ($Food->getSpecies() === 'cane') { ?>
                                <i class="fa-solid fa-shield-dog"></i>
                            <?php } elseif ($Food->getSpecies() === 'gatto') { ?>
                                <i class="fa-solid fa-shield-cat"></i>
                            <?php } ?>
                            <h2 class="card-title"><?php echo $Food->getName(); ?></h2>
                            <p class="card-text">Composition: <?php echo $Food->getComposition(); ?></p>
                            <p class="card-text">Description: <?php echo $Food->getDescription(); ?></p>
                            <p class="card-text">Price: $<?php echo $Food->getPrice(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>