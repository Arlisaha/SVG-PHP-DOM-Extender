<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*A "G" element to group shapes together.*/
class GElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'g';
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}