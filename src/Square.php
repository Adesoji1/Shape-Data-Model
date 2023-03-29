<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;


/**
 * Class Square
 * @package App
 */

class Square implements ShapeInterface {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getName(): string {
        return "Square";
    }

    public function getArea(): float {
        return $this->side * $this->side;
    }

    public function getPerimeter(): float {
        return 4 * $this->side;
    }
}
