<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Polyline shape.*/
class PolylineElement extends AbstractShapeElement
{
	protected static $name = 'polyline';
	/**
	 * @var PointsAttr $points : The points to draw the line.
	 */
	protected $points;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'points',
		];
	}
}