<?php

namespace SVGPHPDOMExtender\Attributes;

class PointsAttr extends AbstractAttr
{
	public static $name = 'points';
	
	/**
	 * Append a pair of coordinates to the current list of points.
	 * 
	 * @param int $x : The x coordinate of the point.
	 * @param int $y : The y coordinate of teh point.
	 */
	public function addPoint($x, $y) {
		if(empty($this->value)) {
			$this->value = '';
		}
		
		$this->value .= sprintf(' %d,%d', $x, $y);
	}
}