<?php

namespace SVGPHPDOMExtender\Elements\Filters;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a light source.*/
class FePointLightElement extends AbstractElement
{
	protected static $name = 'fePointLight';
	/**
	 * https://www.w3.org/TR/SVG/filters.html#fePointLightXAttribute
	 * 
	 * @var XAttr $x : X location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#fePointLightYAttribute
	 * 
	 * @var YAttr $y : Y location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#fePointLightZAttribute
	 * 
	 * @var ZAttr $z : Z location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $z;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'z',
		];
	}
}