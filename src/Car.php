<?php

require_once 'IVehicle.php';
require_once 'IBrand.php';

// Correct use of inheritance to avoid excessive coupling.
class Car implements IVehicle, IBrand {

    // Implementation of the IBrand interface
    public function displayBrand() {
        echo "Toyota\n";
    }

    // Implementation of the IVehicle interface
    public function move() {
        echo "Moving car...\n";
    }

    public function openDoors() {
        echo "Opening doors...\n";
    }

    public function closeDoors() {
        echo "Closing doors...\n";
    }
}