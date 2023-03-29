<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;


/**
 * Class Rectangle
 * @package App
 */

 class Rectangle implements ShapeInterface {
     private $width;
     private $height;
 
     public function __construct($width, $height) {
         $this->width = $width;
         $this->height = $height;
     }
 
     public function getName(): string {
         return "Rectangle";
     }
 
     public function getArea(): float {
         return $this->width * $this->height;
     }
 
     public function getPerimeter(): float {
         return 2 * ($this->width + $this->height);
     }
 }
 
