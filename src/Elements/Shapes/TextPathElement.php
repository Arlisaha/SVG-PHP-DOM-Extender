<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*TextPath shape.*/
class TextPathElement extends AbstractShapeElement
{
	protected static $name = 'textPath';
	/**
	 * @var XlinkHrefAttr $xlinkHref : The reference of the path to use.
	 */
	protected $xlinkHref;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'xlinkHref',
		];
	}
}