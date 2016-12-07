<?php

namespace SVGPHPDOMExtender\Elements\Lists;

use \DOMElement;
use \InvalidArgumentException;

/*List of UseElement.*/
class UseElementList implements \IteratorAggregate
{
	/**
	 * @var UseElement[]
	 */
	private $list;
	
	public function __construct(array $list = null) {
		if(empty($list)) {
			$list = [];
		}
		
		foreach($list as $use) {
			if(!($use instanceof UseElement)) {
				throw new InvalidArgumentException('The array must contain only Node objects. "'.get_class($use).'" given.');
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
	 * Add a UseElement object to the collection.
	 * 
	 * @param UseElement $node : The UseElement instance to add to the current collection.
	 */
	public function add(UseElement $use) {
		$this->list[] = $use;
	}
}