<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*Object that represent the document itself. It is the entry point of the objects tree with all nodes.*/
class DefsElement extends AbstractElementWithConditionalProcessingAttributes
{
	protected static $name = 'defs';
	/**
	 * @var TransformAttr $transform : Apply transformation over its shapes elements.
	 */
	protected $transform;
}