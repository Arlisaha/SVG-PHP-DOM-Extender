<?php

namespace SVGPHPDOMExtender\Attributes;

use \InvalidArgumentException;

class DAttr extends AbstractAttr
{
	const MOVETO = 'M';
	const RELATIVE_MOVETO = 'm';
	const LINETO = 'L';
	const RELATIVE_LINETO = 'l';
	const HORIZONTALLINETO = 'H';
	const RELATIVE_HORIZONTALLINETO = 'h';
	const VERTICALLINETO = 'V';
	const RELATIVE_VERTICALLINETO = 'v';
	const CURVETO = 'C';
	const RELATIVE_CURVETO = 'c';
	const SMOOTHCURVETO = 'S';
	const RELATIVE_SMOOTHCURVETO = 's';
	const QUADRATICBEZIERCURVETO = 'Q';
	const RELATIVE_QUADRATICBEZIERCURVETO = 'q';
	const SMOOTHQUADRATICBEZIERCURVETO = 'T';
	const RELATIVE_SMOOTHQUADRATICBEZIERCURVETO = 't';
	const ELLIPTICALARC = 'A';
	const RELATIVE_ELLIPTICALARC = 'a';
	const CLOSEPATH = 'Z';
	const RELATIVE_CLOSEPATH = 'z';
	
	public static $name = 'd';
	
	/**
	 * Group given coordinates in arrays of $minNumberArguments.
	 * 
	 * @param int $minNumberArguments : Number of coordinate in the groups to make.
	 * @param array $coordinates : The array of coordinates.
	 * 
	 * @return array $newCoordinates : The new array of coordinates.
	 */
	private function groupCoordinates($minNumberArguments, $coordinates) {
		if(count($coordinates) % $minNumberArguments !== 0) {
			throw new InvalidArgumentException(sprintf('Arguments must go by %d.', $minNumberArguments));
		}
		
		$groupNumber = count($coordinates)/$minNumberArguments;
		$newCoordinates = [];
		
		for($i = 0;$i < $groupNumber;++$i) {
			$newCoordinates[] = array_slice($coordinates, $i*$minNumberArguments, $minNumberArguments);
		}
		$coordinates = $newCoordinates;
		
		$newCoordinates = [];
		foreach($coordinates as $group) {
			$pairs = [];
			for($i = 0;$i < $minNumberArguments/2;++$i) {
				$pairs[] = implode(',', array_slice($group, $i*2, 2));
			}
			$newCoordinates[] = implode(' ', $pairs);
		}
			
		return $newCoordinates;
	}
	
	/**
	 * Add an instruction defined by its command (M, m, L, l, ...) and the coordinates to add.
	 * 
	 * @param String $instruction : The command instruction.
	 * @param int $minNumberArguments : Number of coordinate in the groups to make.
	 * @param Array $coordinates : arrays of group of coordinates.
	 */
	private function drawInstruction($instruction, $minNumberArguments, $coordinates) {
		if($minNumberArguments > 1) {
			$coordinates = $this->groupCoordinates($minNumberArguments, $coordinates);
		}
		
		$this->addDraw($instruction.implode(' ', $coordinates));
	}
	
	/**
	 * Add a "Move To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates [x, y].
	 */
	public function drawMoveTo(...$coordinates) {
		$this->drawInstruction(self::MOVETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Move To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates [x, y].
	 */
	public function drawRelativeMoveTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_MOVETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Line To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates [x, y].
	 */
	public function drawLineTo(...$coordinates) {
		$this->drawInstruction(self::LINETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Line To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates [x, y].
	 */
	public function drawRelativeLineTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_LINETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Horizontal Line To" instruction.
	 * 
	 * @param int $coordinate : x coordinate.
	 */
	public function drawHorizontalLineTo($coordinate) {
		$this->drawInstruction(self::HORIZONTALLINETO, 1, [$coordinate]);
	}
	
	/**
	 * Add a "Horizontal Line To" instruction relative to current pen location.
	 * 
	 * @param int $coordinate : x coordinate.
	 */
	public function drawHorizontalRelativeLineTo($coordinate) {
		$this->drawInstruction(self::RELATIVE_HORIZONTALLINETO, 1, [$coordinate]);
	}
	
	/**
	 * Add a "Vertical Line To" instruction.
	 * 
	 * @param int $coordinate : y coordinate.
	 */
	public function drawVerticalLineTo($coordinate) {
		$this->drawInstruction(self::VERTICALLINETO, 1, [$coordinate]);
	}
	
	/**
	 * Add a "Vertical Line To" instruction relative to current pen location.
	 * 
	 * @param int $coordinate : y coordinate.
	 */
	public function drawVerticalRelativeLineTo($coordinate) {
		$this->drawInstruction(self::RELATIVE_VERTICALLINETO, 1, [$coordinate]);
	}
	
	/**
	 * Add a "Curve To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawCurveTo(...$coordinates) {
		$this->drawInstruction(self::CURVETO, 6, $coordinates);
	}
	
	/**
	 * Add a "Curve To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawRelativeCurveTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_CURVETO, 6, $coordinates);
	}
	
	/**
	 * Add a "Smooth Curve To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawSmoothCurveTo(...$coordinates) {
		$this->drawInstruction(self::SMOOTHCURVETO, 4, $coordinates);
	}
	
	/**
	 * Add a "Smooth Curve To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawRelativeSmoothCurveTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_SMOOTHCURVETO, 4, $coordinates);
	}
	
	/**
	 * Add a "Quadratic Bezier Curve To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawQuadraticBezierCurveTo(...$coordinates) {
		$this->drawInstruction(self::QUADRATICBEZIERCURVETO, 4, $coordinates);
	}
	
	/**
	 * Add a "Quadratic Bezier Curve To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawRelativeQuadraticBezierCurveTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_QUADRATICBEZIERCURVETO, 4, $coordinates);
	}
	
	/**
	 * Add a "Smooth Quadratic Bezier Curve To" instruction.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawSmoothQuadraticBezierCurveTo(...$coordinates) {
		$this->drawInstruction(self::SMOOTHQUADRATICBEZIERCURVETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Smooth Quadratic Bezier Curve To" instruction relative to current pen location.
	 * 
	 * @param Array ...$coordinates : arrays of coordinates.
	 */
	public function drawRelativeSmoothQuadraticBezierCurveTo(...$coordinates) {
		$this->drawInstruction(self::RELATIVE_SMOOTHQUADRATICBEZIERCURVETO, 2, $coordinates);
	}
	
	/**
	 * Add a "Elliptical Arc" instruction.
	 * 
	 * @param int $rx : Radius x value.
	 * @param int $ry : Radius y value.
	 * @param int $xAxisRotation : the rotation around the x axis.
	 * @param int $largeArcFlag : large arc flag.
	 * @param int $sweepflag : sweep flag.
	 * @param int $x : x coordinate.
	 * @param int $y : y coordinate.
	 */
	public function drawEllipticalArc($rx, $ry, $xAxisRotation, $largeArcFlag, $sweepflag, $x, $y) {
		$this->addDraw(sprintf('%s%d,%d %d %d %d %d,%d', self::ELLIPTICALARC, $rx, $ry, $xAxisRotation, $largeArcFlag, $sweepflag, $x, $y));
	}
	
	/**
	 * Add a "Elliptical Arc" instruction relative to current pen location.
	 * 
	 * @param int $rx : Radius x value.
	 * @param int $ry : Radius y value.
	 * @param int $xAxisRotation : the rotation around the x axis.
	 * @param int $largeArcFlag : large arc flag.
	 * @param int $sweepflag : sweep flag.
	 * @param int $x : x coordinate.
	 * @param int $y : y coordinate.
	 */
	public function drawRelativeEllipticalArc($rx, $ry, $xAxisRotation, $largeArcFlag, $sweepflag, $x, $y) {
		$this->addDraw(sprintf('%s%d,%d %d %d %d %d,%d', self::RELATIVE_ELLIPTICALARC, $rx, $ry, $xAxisRotation, $largeArcFlag, $sweepflag, $x, $y));
	}
	
	/**
	 * Add a "Close Path" instruction.
	 */
	public function drawClosePath() {
		$this->addDraw(self::CLOSEPATH);
	}
	
	/**
	 * Add a "Close Path" instruction relative to current pen location.
	 */
	public function drawRelativeClosePath() {
		$this->addDraw(self::RELATIVE_CLOSEPATH);
	}
		
	/**
	 * Append a drawing instruction to the list of existents.
	 * 
	 * @param String $fullInstruction : The drawing instruction to add.
	 */
	public function addDraw($fullInstruction) {
		if(empty($this->value)) {
			$this->value = '';
		}
		
		$this->value = trim(sprintf('%s %s', trim($this->value), trim($fullInstruction)));
	}
}