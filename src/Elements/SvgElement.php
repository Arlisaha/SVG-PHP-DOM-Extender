<?php

namespace SVGPHPDOMExtender\Elements;

use \DOMElement;

/*Object that represent the document itself. It is the entry point of the objects tree with all nodes.*/
class SvgElement extends AbstractElement
{
	protected static $name = 'svg';
	/**
	 * @var XmlnsAttr $xmlns : $xmlns value.
	 */
	protected $xmlns;
	/**
	 * @var XmlnsXlinkAttr $xmlnsXlink : $xmlnsXlink value.
	 */
	protected $xmlnsXlink;
	/**
	 * @var HeightAttr $height : All SVG's height.
	 */
	protected $height;
	/**
	 * @var WidthAttr $width : All SVG's width.
	 */
	protected $width;
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
	
	public function __construct() {
		parent::__construct();
		$this->setXmlns('http://www.w3.org/2000/svg');
		$this->setXmlnsXlink('http://www.w3.org/1999/xlink');
	}
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}