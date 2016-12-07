<?php

namespace SVGPHPDOMExtender\Elements\Lists;

use \DOMElement;
use \InvalidArgumentException;
use SVGPHPDOMExtender\Shapes\AbstractShapeElement;

/*List of AbstractShapeElement.*/
class ShapeElementList implements \IteratorAggregate
{
	/**
	 * @var AbstractShapeElement[]
	 */
	private $list;
	
	public function __construct(array $list = null) {
		if(empty($list)) {
			$list = [];
		}
		
		foreach($list as $shape) {
			if(!is_subclass_of($shape, 'AbstractShapeElement')) {
				throw new InvalidArgumentException('The array must contain only Node objects. "'.get_class($shape).'" given.');
			}
		}
		
		$this->list = $list;
	}
	
	/**
	 * Method to retrieve the iterrator on the list property.
	 * 
	 * @return ArrayIterator : the ArrayInterrator instance with the current collection.
	 */
	public function getIterator() {
		return new ArrayIterator($this->list);
	}
	
	/**
	 * Add a AbstractShapeElement object to the collection.
	 * 
	 * @param AbstractShapeElement $node : The AbstractShapeElement instance to add to the current collection.
	 */
	public function add(AbstractShapeElement $shape) {
		$this->list[] = $shape;
	}
}