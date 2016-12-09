<?php

namespace SVGPHPDOMExtender\Attributes;

class XmlnsXlinkAttr extends AbstractAttr
{
	public static $name = 'xmlns:xlink';
	
	public function __construct($value = 'http://www.w3.org/1999/xlink') {
		parent::__construct(static::$name, $value);
	}
}