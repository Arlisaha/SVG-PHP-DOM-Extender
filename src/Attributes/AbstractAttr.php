<?php

namespace SVGPHPDOMExtender\Attributes;

use \DOMAttr;

class AbstractAttr extends DOMAttr
{
	public function __construct($value = null) {
		parent::__construct(static::$name, $value);
	}
}