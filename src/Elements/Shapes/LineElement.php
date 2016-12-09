<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Line shape.*/
class LineElement extends AbstractShapeElement
{
	protected static $name = 'line';
	/**
	 * @var X1Attr $x1 : The x coordinate of the first point of the line.
	 */
	protected $x1;
	/**
	 * @var Y1Attr $y1 : The y coordinate of the first point of the line.
	 */
	protected $y1;
	/**
	 * @var X2Attr $x2 : The x coordinate of the second point of the line.
	 */
	protected $x2;
	/**
	 * @var Y2Attr $y2 : The y coordinate of the second point of the line.
	 */
	protected $y2;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x1',
			'y1',
			'x2',
			'y2',
		];
	}
}