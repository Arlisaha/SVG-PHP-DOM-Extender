<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

/*A "G" element to group shapes together.*/
class GElement extends AbstractShapeElement
{
	protected static $name = 'g';
	/**
	 * @var ClipPathAttr $clipPath : Reference an existent clip path.
	 */
	private $clipPath;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}