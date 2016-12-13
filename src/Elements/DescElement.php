<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*A description for any element.*/
class DescElement extends AbstractElement
{
	protected static $name = 'desc';
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}