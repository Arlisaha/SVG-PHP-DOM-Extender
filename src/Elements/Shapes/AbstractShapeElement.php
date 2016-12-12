<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Abstract class with basic shape properties.*/
abstract class AbstractShapeElement extends AbstractElement
{
	/**
	 * @var StyleAttr $style : The Style instance to add as an attribute
	 */
	protected $style;
	/**
	 * @var TransformAttr $transform : The Transform instance to add as an attribute
	 */
	protected $transform;
}