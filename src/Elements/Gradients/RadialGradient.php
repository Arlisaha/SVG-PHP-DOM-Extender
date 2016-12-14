<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a radial gradient.*/
class RadialGradientElement extends AbstractElement
{
	protected static $name = 'radialGradient';
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementHrefAttribute
	 * 
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	protected $xlinkHref;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementSpreadMethodAttribute
	 * 
	 * @var SpreadMethodAttr $spreadMethod : Indicates what happens if the gradient starts or ends inside the bounds of the target rectangle.
	 */
	protected $spreadMethod;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementGradientUnitsAttribute
	 * 
	 * @var GradientUnitsAttr $gradientUnits : Defines the coordinate system for attributes ‘x1’, ‘y1’, ‘x2’ and ‘y2’.
	 */
	protected $gradientUnits;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementGradientTransformAttribute
	 * 
	 * @var GradientTransformAttr $gradientTransfrom : Contains the definition of an optional additional transformation from the gradient coordinate system onto the target coordinate system.
	 */
	protected $gradientTransfrom;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementCXAttribute
	 * 
	 * @var CxAttr $cx : ‘cx’, ‘cy’ and ‘r’ define the largest (i.e., outermost) circle for the radial gradient.
	 */
	protected $cx;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementCYAttribute
	 * 
	 * @var CyAttr $cy : ‘cx’, ‘cy’ and ‘r’ define the largest (i.e., outermost) circle for the radial gradient.
	 */
	protected $cy;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementRAttribute
	 * 
	 * @var RAttr $r : ‘cx’, ‘cy’ and ‘r’ define the largest (i.e., outermost) circle for the radial gradient.
	 */
	protected $r;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementFXAttribute
	 * 
	 * @var FxAttr $fx : ‘fx’ and ‘fy’ define the focal point for the radial gradient.
	 */
	protected $fx;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#RadialGradientElementFYAttribute
	 * 
	 * @var FyAttr $fy : ‘fx’ and ‘fy’ define the focal point for the radial gradient.
	 */
	protected $fy;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'cx',
			'cy',
			'r',
			'fx',
			'fy',
		];
	}
}