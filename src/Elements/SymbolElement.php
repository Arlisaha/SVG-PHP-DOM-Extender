<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*A reusable symbol.*/
class SymbolElement extends AbstractElement
{
	protected static $name = 'symbol';
	/**
	 * https://www.w3.org/TR/SVG/coords.html#PreserveAspectRatioAttribute
	 * 
	 * @var PreserveAspectRatioAttr $preserveAspectRatio : The id of the group for this use element.
	 */
	protected $preserveAspectRatio;
	/**
	 * https://www.w3.org/TR/SVG/coords.html#ViewBoxAttribute
	 * 
	 * @var ViewBoxAttr $viewBox : Indicates whether or not to force uniform scaling.
	 */
	protected $viewBox;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}