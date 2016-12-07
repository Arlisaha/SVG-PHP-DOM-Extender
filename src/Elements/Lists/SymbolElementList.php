<?php

namespace SVGPHPDOMExtender\Elements\Lists;

use \DOMElement;
use \InvalidArgumentException;

/*List of SymbolElement.*/
class SymbolElementList implements \IteratorAggregate
{
	/**
	 * @var SymbolElement[]
	 */
	private $list;
	
	public function __construct(array $list = null) {
		if(empty($list)) {
			$list = [];
		}
		
		foreach($list as $symbol) {
			if(!($symbol instanceof SymbolElement)) {
				throw new InvalidArgumentException('The array must contain only Node objects. "'.get_class($symbol).'" given.');
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
	 * Add a SymbolElement object to the collection.
	 * 
	 * @param SymbolElement $node : The SymbolElement instance to add to the current collection.
	 */
	public function add(SymbolElement $symbol) {
		$this->list[] = $symbol;
	}
}