<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*A switch element to group shapes together.*/
class SwitchElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'switch';
	/**
	 * @var TransformAttr $transform : Apply transformation over its shapes elements.
	 */
	protected $transform;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}