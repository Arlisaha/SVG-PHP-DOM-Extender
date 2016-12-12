<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Image shape.*/
class ImageElement extends AbstractShapeElement
{
	protected static $name = 'image';
	/**
	 * @var XAttr $x : The x coordinate of the shape.
	 */
	protected $x;
	/**
	 * @var YAttr $y : The y coordinate of the shape.
	 */
	protected $y;
	/**
	 * @var HeightAttr $height : Image's height.
	 */
	protected $height;
	/**
	 * @var WidthAttr $width : Image's width.
	 */
	protected $width;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'height',
			'width',
		];
	}
}