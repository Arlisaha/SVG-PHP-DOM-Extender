<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Use element to reference defined elements.*/
class UseElement extends AbstractElement
{
	protected static $name = 'use';
	/**
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	protected $xlinkHref;
	/**
	 * @var XAttr $x : The new x coordinate of the reused shape.
	 */
	protected $x;
	/**
	 * @var YAttr $y : The new y coordinate of the reused shape.
	 */
	protected $y;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'xlinkHref',
		];
	}
}