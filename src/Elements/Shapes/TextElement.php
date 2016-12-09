<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Text shape.*/
class TextElement extends AbstractShapeElement
{
	protected static $name = 'text';
	/**
	 * @var XAttr $x : The x coordinate of the shape.
	 */
	protected $x;
	/**
	 * @var YAttr $y : The y coordinate of the shape.
	 */
	protected $y;
	/**
	 * @var TextLengthAttr $textLength : Length of the text.
	 */
	protected $textLength;
	/**
	 * @var LengthAdjustAttr $lengthAdjust : Length adjustment of the text.
	 */
	protected $lengthAdjust;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
		];
	}
}