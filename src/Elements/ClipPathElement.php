<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*Define the clipping path.*/
class ClipPathElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'clipPath';
	/**
	 * @var TransformAttr $transform : The Transform instance to add as an attribute.
	 */
	protected $transform;
	/**
	 * https://www.w3.org/TR/SVG/masking.html#ClipPathElementClipPathUnitsAttribute
	 * 
	 * @var ClipPathUnitsAttr $clipPathUnits : Defines the coordinate system for the contents of the ‘clipPath’.
	 */
	protected $clipPathUnits;
}