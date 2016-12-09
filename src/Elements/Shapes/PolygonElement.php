<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Line shape.*/
class PolygonElement extends AbstractShapeElement
{
	protected static $name = 'polygon';
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