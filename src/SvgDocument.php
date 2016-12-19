<?php

namespace SVGPHPDOMExtender;

use \DOMDocument;
use SVGPHPDOMExtender\Elements\SvgElement;

/*Object that represent the document itself.*/
class SvgDocument extends DOMDocument
{
	/**
	 * Create the root SVG node.
	 * 
	 * @return SvgElement : The created SVG element.
	 */
	public function createRootNode() {
		$svgElement = $this->appendChild(new SvgElement());
		$svgElement->appendProperties();
		
		return $svgElement;
	}
}