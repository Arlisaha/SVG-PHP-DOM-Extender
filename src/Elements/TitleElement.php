<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*A Title for any elmeent.*/
class TitleElement extends AbstractElement
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