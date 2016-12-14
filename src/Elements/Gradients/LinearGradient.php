<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a linear gradient.*/
class LinearGradientElement extends AbstractElement
{
	protected static $name = 'linearGradient';
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementHrefAttribute
	 * 
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	protected $xlinkHref;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementX1Attribute
	 * 
	 * @var X1Attr $x1 : ‘x1’, ‘y1’, ‘x2’ and ‘y2’ define a gradient vector for the linear gradient.
	 */
	protected $x1;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementY1Attribute
	 * 
	 * @var Y1Attr $y1 : ‘x1’, ‘y1’, ‘x2’ and ‘y2’ define a gradient vector for the linear gradient.
	 */
	protected $y1;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementX2Attribute
	 * 
	 * @var X2Attr $x2 : ‘x1’, ‘y1’, ‘x2’ and ‘y2’ define a gradient vector for the linear gradient.
	 */
	protected $x2;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementY2Attribute
	 * 
	 * @var Y2Attr $y2 : ‘x1’, ‘y1’, ‘x2’ and ‘y2’ define a gradient vector for the linear gradient.
	 */
	protected $y2;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementSpreadMethodAttribute
	 * 
	 * @var SpreadMethodAttr $spreadMethod : Indicates what happens if the gradient starts or ends inside the bounds of the target rectangle.
	 */
	protected $spreadMethod;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementGradientUnitsAttribute
	 * 
	 * @var GradientUnitsAttr $gradientUnits : Defines the coordinate system for attributes ‘x1’, ‘y1’, ‘x2’ and ‘y2’.
	 */
	protected $gradientUnits;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#LinearGradientElementGradientTransformAttribute
	 * 
	 * @var GradientTransformAttr $gradientTransfrom : Contains the definition of an optional additional transformation from the gradient coordinate system onto the target coordinate system.
	 */
	protected $gradientTransfrom;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x1',
			'y1',
			'x2',
			'y2',
		];
	}
}