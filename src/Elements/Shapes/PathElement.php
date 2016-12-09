<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Path shape.*/
class PathElement extends AbstractShapeElement
{
	protected static $name = 'path';
	/**
	 * @var DAttr $d : The drawing commands.
	 */
	protected $d;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'd',
		];
	}
}