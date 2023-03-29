<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////


namespace App;

class Circle implements ShapeInterface {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getName(): string {
        return "Circle";
    }

    public function getArea(): float {
        return $this->radius * $this->radius * Constants::PI;
    }

    public function getPerimeter(): float {
        return 2 * $this->radius * Constants::PI;
    }
}

