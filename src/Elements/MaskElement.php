<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*Used as an alpha mask for compositing the current object into the background.*/
class MaskElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'mask';
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementXAttribute
	 * 
	 * @var XAttr $x : The new x coordinate of the reused shape.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementYAttribute
	 * 
	 * @var YAttr $y : The new y coordinate of the reused shape.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementHeightAttribute
	 * 
	 * @var HeightAttr $height : The height of the largest possible offscreen buffer.
	 */
	protected $height;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementWidthAttribute
	 * 
	 * @var WidthAttr $width : The width of the largest possible offscreen buffer.
	 */
	protected $width;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementMaskUnitsAttribute
	 * 
	 * @var MaskUnitsAttr $maskUnits : Defines the coordinate system for attributes ‘x’, ‘y’, ‘width’ and ‘height’.
	 */
	protected $maskUnits;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#MaskElementMaskContentUnitsAttribute
	 * 
	 * @var MaskContentUnitsAttr $maskContentUnits : Defines the coordinate system for the contents of the ‘mask’.
	 */
	protected $maskContentUnits;
}