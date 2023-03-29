<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Circle;
use App\Rectangle;
use App\Square;
use App\ShapeFactory;
use App\Constants;
use App\WrongParamCountException;
use App\UnsupportedShapeException;

class BasicTests extends TestCase {

    public function testCircleName() {
        $circle = new Circle(5);
        $this->assertInstanceOf(App\ShapeInterface::class, $circle);
    }

    public function testCircleArea() {
        $circle = new Circle(5);
        $expectedArea = 5 * 5 * Constants::PI;
        $this->assertEquals($expectedArea, $circle->getArea());
    }

    public function testCirclePerimeter() {
        $circle = new Circle(5);
        $expectedPerimeter = 2 * 5 * Constants::PI;
        $this->assertEquals($expectedPerimeter, $circle->getPerimeter());
    }

    // ... Rest of the test cases ...

}
