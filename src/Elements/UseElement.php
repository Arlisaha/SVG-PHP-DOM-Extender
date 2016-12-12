<?php

namespace OpenMindParser\Converters\SVG\Models;

use \DOMElement;

/*Object that represent the document itself. It is the entry point of the objects tree with all nodes.*/
class UseElement extends DOMElement
{
	protected static $name = 'use';
	/**
	 * @var XlinkHrefAttr $xlinkHref : The url of the link.
	 */
	private $xlinkHref;
	/**
	 * @var XAttr $x : The new x coordinate of the reused shape.
	 */
	private $x;
	/**
	 * @var YAttr $y : The new y coordinate of the reused shape.
	 */
	private $x;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'xlinkHref',
		];
	}
}