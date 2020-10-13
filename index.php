<?php
// index.php
require_once 'Bicycle.php';
require_once 'Cars.php';
$bike = new Bicycle();



$bike->setColor("blue");
$bike->setCurrentSpeed(0);
var_dump($bike);

// bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();



// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('black');
$tornado->forward();
var_dump($bike);
$bike->dump();

// Cars
$car = new Cars('blue','diesel',4);
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

