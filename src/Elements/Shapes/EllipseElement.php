<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Ellipse shape.*/
class EllipseElement extends AbstractShapeElement
{
	protected static $name = 'ellipse';
	/**
	 * @var RxAttr $rx : x radius.
	 */
	protected $rx;
	/**
	 * @var RyAttr $ry : y radius.
	 */
	protected $ry;
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
			'rx',
			'ry',
			'cx',
			'cy',
		];
	}
}