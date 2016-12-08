<?php

namespace SVGPHPDOMExtender\Attributes;

use \DOMAttr;

class AbstractAttr extends DOMAttr
{
	public function __construct($value = null) {
		parent::__construct(static::$name, $value);
	}
	
	/**
	 * Return this attribute value.
	 * 
	 * @return String : attribute value.
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Set this attribute value.
	 * 
	 * @param String : attribute value.
	 */
	public function setValue($value) {
		return $this->value = $value;
	}
}