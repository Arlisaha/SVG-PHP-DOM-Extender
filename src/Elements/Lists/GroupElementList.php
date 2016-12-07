<?php

namespace SVGPHPDOMExtender\Elements\Lists;

use \DOMElement;
use \InvalidArgumentException;

/*List of GroupElement.*/
class GroupElementList implements \IteratorAggregate
{
	/**
	 * @var GroupElement[]
	 */
	private $list;
	
	public function __construct(array $list = null) {
		if(empty($list)) {
			$list = [];
		}
		
		foreach($list as $group) {
			if(!($group instanceof GroupElement)) {
				throw new InvalidArgumentException('The array must contain only Node objects. "'.get_class($group).'" given.');
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
	 * Add a GroupElement object to the collection.
	 * 
	 * @param GroupElement $node : The GroupElement instance to add to the current collection.
	 */
	public function add(GroupElement $group) {
		$this->list[] = $group;
	}
}