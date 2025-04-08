<?php

require_once 'IVehicle.php';
require_once 'IBrand.php';

// Correct use of inheritance to avoid excessive coupling.
class Motorcycle implements IVehicle, IBrand
{

    // Implementation of the IBrand interface
    public function displayBrand()
    {
        echo "Honda\n";
    }

    // Implementation of the IVehicle interface
    public function move()
    {
        echo "Moving motorcycle...\n";
    }

    public function frontBrake()
    {
        echo "Engaging front brake...\n";
    }

    public function rearBrake()
    {
        echo "Engaging rear brake...\n";
    }
}
