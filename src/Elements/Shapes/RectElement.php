<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Rect shape.*/
class RectElement extends AbstractShapeElement
{
	protected static $name = 'rect';
	/**
	 * @var XAttr $x : The x coordinate of the shape.
	 */
	protected $x;
	/**
	 * @var YAttr $y : The y coordinate of the shape.
	 */
	protected $y;
	/**
	 * @var HeightAttr $height : Rectangle's height.
	 */
	protected $height;
	/**
	 * @var WidthAttr $width : Rectangle's width.
	 */
	protected $width;
	/**
	 * @var RxAttr $rx : Rectangle's rx value.
	 */
	protected $rx;
	/**
	 * @var RyAttr $ry : Rectangle's ry value.
	 */
	protected $ry;
	
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