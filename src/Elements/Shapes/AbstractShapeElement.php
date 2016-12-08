<?php

namespace SVGPHPDOMExtender\Elements\Shapes;

use \DOMNode;
use \DOMElement;
use \DOMException;
use \BadMethodCallException;
use \InvalidArgumentException;
use SVGPHPDOMExtender\Elements\ElementInterface;

/*Abstract class with basic shape properties.*/
abstract class AbstractShapeElement extends DOMElement implements ElementInterface
{
	/**
	 * @var XAttr $x : The x coordinate of the shape.
	 */
	protected $x;
	/**
	 * @var YAttr $y : The y coordinate of the shape.
	 */
	protected $y;
	/**
	 * @var StyleAttr $style : The Style instance to add as an attribute
	 */
	protected $style;
	/**
	 * @var TransformAttr $transform : The Transform instance to add as an attribute
	 */
	protected $transform;
	
	public function __construct() {
		parent::__construct(static::$name);
		
		$attributes = array_keys(get_object_vars($this));
		foreach($attributes as $property) {
			$class = 'SVGPHPDOMExtender\Attributes\\'.ucfirst($property)."Attr";
			$this->$property = new $class;
		}
	}
	
	/**
	 * Magic method to perform getters and setters over all attributes.
	 * The case notation in use is camelCase (setX, getY, setHeight, ....).
	 */
	public function __call($name, $arguments) {
		if(preg_match('~set(.*)~', $name, $matches)) {
			$this->{lcfirst($matches[1])}->setValue($arguments[0]);
		} elseif(preg_match('~get(.*)~', $name, $matches)) {
			return $this->{lcfirst($matches[1])}->getValue();
		} else {
			throw new BadMethodCallException(sprintf('The requested method "%s" does not exist. Only getters and setters and "appendProperties" are available.', $name));
		}
	}
	
	/**
	 * Append all properties as attributes.
	 */
	public function appendProperties() {
		if(null === $this->parentNode) {
			throw new DOMException('Before appending attributes, this node must be tied to a document');
		}
		
		$requiredProperties = array_merge(['x', 'y'], $this->requiredProperties());
		$attributes = get_object_vars($this);
		
		foreach($attributes as $name => $value) {
			if(in_array($name, $requiredProperties) && null === $value->value) {
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