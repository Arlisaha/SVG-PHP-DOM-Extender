<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*Used as an alpha mask for compositing the current object into the background.*/
class PatternElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'pattern';
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementHrefAttribute
	 * 
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	protected $xlinkHref;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementXAttribute
	 * 
	 * @var XAttr $x : The new x coordinate of the reused shape.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementYAttribute
	 * 
	 * @var YAttr $y : The new y coordinate of the reused shape.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementHeightAttribute
	 * 
	 * @var HeightAttr $height : The height of the largest possible offscreen buffer.
	 */
	protected $height;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementWidthAttribute
	 * 
	 * @var WidthAttr $width : The width of the largest possible offscreen buffer.
	 */
	protected $width;
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
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementPatternTransformAttribute
	 * 
	 * @var PatternTransformAttr $patternTransform : Contains the definition of an optional additional transformation from the pattern coordinate system onto the target coordinate system.
	 */
	protected $patternTransform;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementPatternContentUnitsAttribute
	 * 
	 * @var PatternContentUnitsAttr $patternContentUnits : Defines the coordinate system for the contents of the ‘pattern’.
	 */
	protected $patternContentUnits;
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#PatternElementPatternUnitsAttribute
	 * 
	 * @var PatternUnitsAttr $patternUnits : Defines the coordinate system for attributes ‘x’, ‘y’, ‘width’ and ‘height’.
	 */
	protected $patternUnits;
}