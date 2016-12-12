<?php

namespace SVGPHPDOMExtender\Elements;

use \DOMNode;
use \DOMElement;
use \DOMException;
use \BadMethodCallException;
use \InvalidArgumentException;
use SVGPHPDOMExtender\Elements\ElementInterface;

/*Abstract class with basic element properties.*/
abstract class AbstractElement extends DOMElement implements ElementInterface
{
	public function __construct() {
		parent::__construct(static::$name);
		
		$properties = array_keys(get_object_vars($this));
		foreach($properties as $property) {
			$class = 'SVGPHPDOMExtender\Attributes\\'.ucfirst($property).'Attr';
			$this->{$property} = new $class;
		}
	}
	
	/**
	 * Magic method to perform getters and setters over all attributes, directly on their value.
	 * The case notation in use is camelCase (setX, getY, setHeight, ....).
	 */
	public function __call($name, $arguments) {
		if(preg_match('~set(.*)~', $name, $matches)) {
			$class = 'SVGPHPDOMExtender\Attributes\\'.ucfirst($matches[1]).'Attr';
			if($arguments[0] instanceof $class) {
				$this->{lcfirst($matches[1])} = $arguments[0];
			} else {
				$this->{lcfirst($matches[1])}->setValue($arguments[0]);
			}
		} elseif(preg_match('~get(.*)~', $name, $matches)) {
			return $this->{lcfirst($matches[1])};
		} else {
			throw new BadMethodCallException(sprintf('The requested method "%s" does not exist. Only getters and setters and "appendProperties" are available.', $name));
		}
	}
	
	/**
	 * Append all properties as attributes.
	 */
	public function appendProperties() {
		if(null === $this->parentNode) {
			throw new DOMException('Before appending attributes and/or nodes, this node must be tied to a document');
		}
		
		$requiredProperties = $this->requiredProperties();
		$properties = get_object_vars($this);
		
		foreach($properties as $name => $value) {
			if(in_array($name, $requiredProperties) && null === $value->getValue()) {
				throw new InvalidArgumentException(sprintf('The property "%s" is required.', $name));
			}
			$this->appendChild($value);
		}
	}
	
	/**
	 * List of properties that must be filled for the given shape.
	 * 
	 * @return Array : List of required properties.
	 */
	abstract protected function requiredProperties();
}