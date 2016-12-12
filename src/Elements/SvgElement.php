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