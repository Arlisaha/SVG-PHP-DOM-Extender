<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a stop in gradients.*/
class StopElement extends AbstractElement
{
	protected static $name = 'stop';
	/**
	 * https://www.w3.org/TR/SVG/pservers.html#StopElementOffsetAttribute
	 * 
	 * @var OffsetAttr $offset : For linear gradients, the ‘offset’ attribute represents a location along the gradient vector. For radial gradients, it represents a percentage distance from (fx,fy) to the edge of the outermost/largest circle.
	 */
	protected $offset;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'offset',
		];
	}
}