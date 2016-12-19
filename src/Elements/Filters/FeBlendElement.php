<?php

namespace SVGPHPDOMExtender\Elements\Filters;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a filter blending two objects.*/
class FeBlendElement extends AbstractElement
{
	protected static $name = 'feBlend';
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveXAttribute
	 * 
	 * @var XAttr $x : The minimum x coordinate for the subregion which restricts calculation and rendering of the given filter primitive.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveYAttribute
	 * 
	 * @var YAttr $y : The minimum y coordinate for the subregion which restricts calculation and rendering of the given filter primitive.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveWidthAttribute
	 * 
	 * @var WidthAttr $width : The width of the subregion which restricts calculation and rendering of the given filter primitive.
	 */
	protected $width;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveHeightAttribute
	 * 
	 * @var HeightAttr $height : The height of the subregion which restricts calculation and rendering of the given filter primitive.
	 */
	protected $height;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveResultAttribute
	 * 
	 * @var ResultAttr $result : Assigned name for this filter primitive.
	 */
	protected $result;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterPrimitiveInAttribute
	 * 
	 * @var InAttr $in : Identifies input for the given filter primitive.
	 */
	protected $in;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feBlendIn2Attribute
	 * 
	 * @var In2Attr $in2 : The second input image to the blending operation.
	 */
	protected $in2;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feBlendModeAttribute
	 * 
	 * @var ModeAttr $mode : One of the image blending modes.
	 */
	protected $mode;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'z',
			'width',
			'height',
			'in',
			'in2',
		];
	}
}