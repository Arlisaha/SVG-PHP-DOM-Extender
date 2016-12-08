<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Circle shape.*/
class CircleElement extends AbstractShapeElement
{
	protected static $name = 'circle';
	/**
	 * @var RAttr $r : circle's radius.
	 */
	protected $r;
	/**
	 * @var CxAttr $cx : Circle's x center coordinate.
	 */
	protected $cx;
	/**
	 * @var CyAttr $cy : Circle's y center coordinate.
	 */
	protected $cy;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'r',
			'cx',
			'cy',
		];
	}
}