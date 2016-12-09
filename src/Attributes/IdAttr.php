<?php

namespace SVGPHPDOMExtender\Attributes;

class IdAttr extends AbstractAttr
{
	public static $name = 'id';
	
	public function getValue() {
		return ltrim($this->value, '#');
	}
	
	public function setValue($value) {
		$this->value ='#'.ltrim($this->value, '#');
	}
}