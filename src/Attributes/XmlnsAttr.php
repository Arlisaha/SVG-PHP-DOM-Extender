<?php

namespace SVGPHPDOMExtender\Attributes;

class XmlnsAttr extends AbstractAttr
{
	public static $name = 'xmlns';
	
	public function __construct($value = 'http://www.w3.org/2000/svg') {
		parent::__construct($value);
	}
}