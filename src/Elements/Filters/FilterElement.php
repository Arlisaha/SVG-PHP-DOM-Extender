<?php

namespace SVGPHPDOMExtender\Elements\Filters;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a filter.*/
class FilterElement extends AbstractElement
{
	protected static $name = 'filter';
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementHrefAttribute
	 * 
	 * @var XlinkHrefAttr $xlinkHref : An IRI reference to another ‘filter’ element within the current SVG document fragment.
	 */
	protected $xlinkHref;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementXAttribute
	 * 
	 * @var XAttr $x : Define a rectangular region on the canvas to which this filter applies.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementYAttribute
	 * 
	 * @var YAttr $y : Define a rectangular region on the canvas to which this filter applies.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementHeightAttribute
	 * 
	 * @var HeightAttr $height : Define a rectangular region on the canvas to which this filter applies.
	 */
	protected $height;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementWidthAttribute
	 * 
	 * @var WidthAttr $width : Define a rectangular region on the canvas to which this filter applies.
	 */
	protected $width;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementFilterResAttribute
	 * 
	 * @var FilterResAttr $filterRes : This attribute takes the form x-pixels [y-pixels], and indicates the width and height of the intermediate images in pixels.
	 */
	protected $filterRes;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementFilterUnitsAttribute
	 * 
	 * @var FilterUnitsAttr $filterUnits : Defines the coordinate system for attributes ‘x’, ‘y’, ‘width’ and ‘height’.
	 */
	protected $filterUnits;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#FilterElementPrimitiveUnitsAttribute
	 * 
	 * @var PrimitiveUnitsAttr $filterUnits : Specifies the coordinate system for the various length values within the filter primitives and for the attributes that define the filter primitive subregion.
	 */
	protected $primitiveUnits;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'height',
			'width',
		];
	}
}