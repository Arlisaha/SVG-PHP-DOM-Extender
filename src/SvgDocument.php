<?php

namespace SVGPHPDOMExtender;

use \DOMDocument;
use \DOMNode;
use GroupElement;
use SVGPHPDOMExtender\Elements\SvgElement;
use SVGPHPDOMExtender\Elements\GElement;
use SVGPHPDOMExtender\Elements\Shapes\RectElement;

/*Object that represent the document itself.*/
class SvgDocument extends DOMDocument
{
	/**
	 * Create the root SVG node.
	 * 
	 * @return SvgElement : The created SVG element.
	 */
	public function createRootNode() {
		return $this->appendChild(new SvgElement())->appendProperties();
	}
}