<?php

namespace SVGPHPDOMExtender\Elements;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*A "A" element to make a link out of a shape.*/
class AElement extends AbstractElement
{
	protected static $name = 'a';
	/**
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	protected $xlinkHref;
	/**
	 * @var XlinkShowAttr $xlinkShow : The url of the link.
	 */
	protected $xlinkShow;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'xlinkHref',
		];
	}
}