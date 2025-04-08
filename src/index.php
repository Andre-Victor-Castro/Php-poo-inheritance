<?php

require_once 'Car.php'; // Include the file where the Car class is defined
require_once 'Motorcycle.php'; // Include the file where the Car class is defined

// Correct use of inheritance to avoid excessive coupling.
$car1 = new Car(); // IVehicle car1 = new Car()
$motorcycle1 = new Motorcycle(); // IVehicle motorcycle1 = new Motorcycle()

echo "\n ---- Car ---- \n";
if ($car1 instanceof Car) {
    $car1->openDoors();
    $car1->closeDoors();
}
$car1->move();

echo "\n ---- Motorcycle ---- \n";
$motorcycle1->move();
if ($motorcycle1 instanceof Motorcycle) {
    $motorcycle1->rearBrake();
    $motorcycle1->frontBrake();
}
