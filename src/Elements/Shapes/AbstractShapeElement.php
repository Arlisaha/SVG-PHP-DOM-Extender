<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Abstract class with basic shape properties.*/
abstract class AbstractShapeElement extends AbstractElement
{
	/**
	 * https://www.w3.org/TR/SVG/struct.html#RequiredFeaturesAttribute
	 * 
	 * @var RequiredFeaturesAttr $requiredFeatures : The value is a list of feature strings.
	 */
	protected $requiredFeatures;
	/**
	 * https://www.w3.org/TR/SVG/struct.html#RequiredExtensionsAttribute
	 * 
	 * @var RequiredExtensionAttr $requiredExtensions : The value is a list of IRI references which identify the required extensions.
	 */
	protected $requiredExtensions;
	/**
	 * https://www.w3.org/TR/SVG/struct.html#SystemLanguageAttribute
	 * 
	 * @var SystemLanguageAttr $systemLanguage : Evaluates to "true" if one of the languages indicated by user preferences exactly equals one of the languages given in the value of this parameter.
	 */
	protected $systemLanguage;
	/**
	 * @var TransformAttr $transform : The Transform instance to add as an attribute.
	 */
	protected $transform;
	/**
	 * @var FilterAttr $filter : The filter to apply.
	 */
	protected $filter;
}