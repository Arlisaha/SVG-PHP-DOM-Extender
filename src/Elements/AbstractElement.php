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
	/**
	 * https://www.w3.org/TR/SVG/struct.html#IDAttribute
	 * 
	 * @var IdAttr $id : Unique tag name
	 */
	protected $id;
	/**
	 * https://www.w3.org/TR/SVG/styling.html#StyleAttribute
	 * 
	 * @var StyleAttr $style : The Style instance to add as an attribute
	 */
	protected $style;
	
	public function __construct() {
		parent::__construct(static::$name);
		
		$properties = array_keys(get_object_vars($this));
		foreach($properties as $property) {
			$class = sprintf('SVGPHPDOMExtender\Attributes\%sAttr', ucfirst($property));
			$this->{$property} = new $class;
		}
	}
	
	/**
	 * Magic method to perform getters and setters over all attributes, directly on their value.
	 * The case notation in use is camelCase (setX, getY, setHeight, ....).
	 */
	public function __call($name, $arguments) {
		if(preg_match('~(set|get)(.*)~', $name, $matches) && class_exists($class = sprintf('SVGPHPDOMExtender\Attributes\%sAttr', ucfirst($matches[2])))) {
			switch($matches[1]) {
				case 'set' : 
					if($arguments[0] instanceof $class) {
						$this->{lcfirst($matches[2])} = $arguments[0];
					} else {
						$this->{lcfirst($matches[2])}->setValue($arguments[0]);
					}
					break;
				case 'get' : 
					return $this->{lcfirst($matches[2])};
					break;
			}
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
			//Check if the property is required, and if it is, its value must not be null
			if(in_array($name, $requiredProperties) && (null === $value->getValue() || '' === $value->getValue())) {
				throw new InvalidArgumentException(sprintf('The property "%s" is required.', $name));
			} elseif(null !== $value->getValue()) {
				$this->appendChild($value);
			}
		}
	}
	
	/**
	 * List of properties that must be filled for the given shape.
	 * 
	 * @return Array : List of required properties.
	 */
	abstract protected function requiredProperties();
}