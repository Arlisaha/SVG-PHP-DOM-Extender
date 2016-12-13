<?php

namespace SVGPHPDOMExtender\Elements\Animations;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Set tag.*/
class SetElement extends AbstractAnimationElement
{
	protected static $name = 'set';
	/**
	 * https://www.w3.org/TR/SVG/animate.html#AttributeNameAttribute
	 * 
	 * @var AttributeNameAttr $attributeName : Specifies the name of the target attribute.
	 */
	protected $attributeName;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#AttributeTypeAttribute
	 * 
	 * @var AttributetYPEAttr $attributeType : Specifies the namespace in which the target attribute and its associated values are defined.
	 */
	protected $attributeType;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#SetElementToAttribute
	 * 
	 * @var ToAttr $to : Specifies the value for the attribute during the duration.
	 */
	protected $to;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}