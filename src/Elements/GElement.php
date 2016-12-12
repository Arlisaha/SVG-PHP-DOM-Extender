<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*A "G" element to group shapes together.*/
class GElement extends AbstractElement
{
	protected static $name = 'g';
	/**
	 * @var IdAttr $id : The id of the group.
	 */
	private $id;
	/**
	 * @var SystemLanguageAttr $systemLanguage : The language for the current group. To use when in a switch element.
	 */
	private $systemLanguage;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}