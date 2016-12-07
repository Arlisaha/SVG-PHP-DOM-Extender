<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Object that represent the document itself. It is the entry point of the objects tree with all nodes.*/
class RectElement extends AbstractShapeElement
{
	protected static $name = 'rect';
	/**
	 * @var int $height : Rectangle's height.
	 */
	protected $height;
	/**
	 * @var int $width : Rectangle's width.
	 */
	protected $width;
	/**
	 * @var int $rx : Rectangle's rx value.
	 */
	protected $rx;
	/**
	 * @var int $ry : Rectangle's ry value.
	 */
	protected $ry;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'height',
			'width',
		];
	}
}