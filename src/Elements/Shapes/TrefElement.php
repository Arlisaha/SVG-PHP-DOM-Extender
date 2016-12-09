<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMElement;
use SVGPHPDOMExtender\Attributes;

/*Tref shape.*/
class TrefElement extends AbstractShapeElement
{
	protected static $name = 'tref';
	/**
	 * @var XlinkHrefAttr $xlinkHref : The reference of the text to use.
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