<?php

// /////////////////////////////////////////////////////////////////////////////
// PLEASE DO NOT RENAME OR REMOVE ANY OF THE CODE BELOW. 
// THE INTERFACE FOR THIS FILE SHOULD NOT BE CHANGED 
// YOU CAN ADD YOUR CODE TO THIS FILE TO EXTEND THE FEATURES TO USE THEM IN YOUR WORK.
// /////////////////////////////////////////////////////////////////////////////

namespace App;

// use App\Exceptions\UnsupportedShapeException;
// use App\Exceptions\WrongParamCountException;
// use Shapes\Circle;
// use Shapes\Rectangle;
// use Shapes\Square;
/**
 * Class ShapeFactory
 * @package App
 */
// class ShapeFactory
// {
    /**
     * Creates a specific GeometricShape object from the given attributes.
     *
     * Usage examples:
     *     ShapeFactory::createShape("Circle", 4)
     *     ShapeFactory::createShape("Rectangle", [3, 5])
     *
     * @param string $shape
     * @param array $params
     * @return mixed
     * @throws WrongParamCountException|UnsupportedShapeException
     */
      

class ShapeFactory {
    public static function createShape($shape, ...$params) {
        switch (strtolower($shape)) {
            case 'circle':
                if (count($params) != 1) {
                    throw new WrongParamCountException("Circle requires exactly 1 parameter.");
                }
                return new Circle($params[0]);

            case 'rectangle':
                if (count($params) != 2) {
                    throw new WrongParamCountException("Rectangle requires exactly 2 parameters.");
                }
                return new Rectangle($params[0], $params[1]);

            case 'square':
                if (count($params) != 1) {
                    throw new WrongParamCountException("Square requires exactly 1 parameter.");
                }
                return new Square($params[0]);

            default:
                throw new UnsupportedShapeException("Unsupported shape requested.");
        }
    }
}
