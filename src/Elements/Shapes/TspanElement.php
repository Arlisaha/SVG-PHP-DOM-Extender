<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Tspan shape.*/
class TspanElement extends AbstractShapeElement
{
	protected static $name = 'tspan';
	/**
	 * @var DxAttr $dx : The delta x positionning.
	 */
	protected $dx;
	/**
	 * @var DyAttr $dy : The delta y positionning.
	 */
	protected $dy;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}