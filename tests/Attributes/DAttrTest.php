<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use \InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\DAttr;

class DAttrTest extends TestCase
{
	protected $attribute;
	
	/**
	 * Call protected/private method of a class.
	 *
	 * @param object &$object    Instantiated object that we will run method on.
	 * @param string $methodName Method name to call
	 * @param array  $parameters Array of parameters to pass into method.
	 *
	 * @return mixed Method return.
	 */
	public function invokeMethod(&$object, $methodName, array $parameters = []) {
	    $reflection = new \ReflectionClass(get_class($object));
	    $method = $reflection->getMethod($methodName);
	    $method->setAccessible(true);
	
	    return $method->invokeArgs($object, $parameters);
	}
	
	public function setUp() {
		$this->attribute = new DAttr();
	}
	
	public function testConstruct() {
		$attribute = new DAttr('test');
		$this->assertEquals('d', $attribute->name);
		$this->assertEquals('test', $attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test2');
		
		$this->assertEquals('test2', $this->attribute->value);
	}
	
	public function testGetValue() {
		$attribute = new DAttr('test');
		$this->assertEquals('test', $attribute->getValue());
	}
	
	public function testGroupCoordinatesException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->invokeMethod($this->attribute, 'groupCoordinates', [10, [0, 1, 1, 1]]);
	}
	
	public function testGroupCoordinates() {
		$this->assertEquals(['0,1', '1,1'], $this->invokeMethod($this->attribute, 'groupCoordinates', [2, [0, 1, 1, 1]]));
	}
	
	public function testAddDraw() {
		$this->attribute->addDraw('M0,1');
		$this->assertEquals('M0,1', $this->attribute->getValue());
		
		$this->attribute->addDraw('L1,1');
		$this->assertEquals('M0,1 L1,1', $this->attribute->getValue());
	}
	
	public function testDrawInstruction() {
		$this->invokeMethod($this->attribute, 'drawInstruction', ['M', 2, [0, 1, 1, 1]]);
		
		$this->assertEquals('M0,1 1,1', $this->attribute->getValue());
	}
	
	public function testDrawMoveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawMoveTo(0, 1, 1);
	}
	
	public function testDrawMoveTo() {
		$this->attribute->drawMoveTo(0, 1, 1, 1);
		
		$this->assertEquals('M0,1 1,1', $this->attribute->getValue());
	}
	
	public function testDrawRelativeMoveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeMoveTo(0, 1, 1);
	}
	
	public function testDrawRelativeMoveTo() {
		$this->attribute->drawRelativeMoveTo(0, 1, 1, 1);
		
		$this->assertEquals('m0,1 1,1', $this->attribute->getValue());
	}
	
	public function testDrawLineToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawLineTo(0, 1, 1);
	}
	
	public function testDrawLineTo() {
		$this->attribute->drawLineTo(0, 1, 1, 1);
		
		$this->assertEquals('L0,1 1,1', $this->attribute->getValue());
	}
	
	public function testDrawRelativeLineToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeLineTo(0, 1, 1);
	}
	
	public function testDrawRelativeLineTo() {
		$this->attribute->drawRelativeLineTo(0, 1, 1, 1);
		
		$this->assertEquals('l0,1 1,1', $this->attribute->getValue());
	}
	
	public function testDrawHorizontalLineTo() {
		$this->attribute->drawHorizontalLineTo(0);
		
		$this->assertEquals('H0', $this->attribute->getValue());
	}
	
	public function testDrawHorizontalRelativeLineTo() {
		$this->attribute->drawHorizontalRelativeLineTo(0);
		
		$this->assertEquals('h0', $this->attribute->getValue());
	}
	
	public function testDrawVerticalLineTo() {
		$this->attribute->drawVerticalLineTo(0);
		
		$this->assertEquals('V0', $this->attribute->getValue());
	}
	
	public function testDrawVerticalRelativeLineTo() {
		$this->attribute->drawVerticalRelativeLineTo(0);
		
		$this->assertEquals('v0', $this->attribute->getValue());
	}
	
	public function testDrawCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawCurveTo(0, 1, 1);
	}
	
	public function testDrawCurveTo() {
		$this->attribute->drawCurveTo(0, 1, 5, 6, 8, 10);
		$this->assertEquals('C0,1 5,6 8,10', $this->attribute->getValue());
	}
	
	public function testDrawRelativeCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeCurveTo(0, 1, 1);
	}
	
	public function testDrawRelativeCurveTo() {
		$this->attribute->drawRelativeCurveTo(0, 1, 5, 6, 8, 10);
		$this->assertEquals('c0,1 5,6 8,10', $this->attribute->getValue());
	}
	
	public function testDrawSmoothCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawSmoothCurveTo(0, 1, 1);
	}
	
	public function testDrawSmoothCurveTo() {
		$this->attribute->drawSmoothCurveTo(0, 1, 5, 6, 8, 10, 12, 14);
		$this->assertEquals('S0,1 5,6 8,10 12,14', $this->attribute->getValue());
	}
	
	public function testDrawRelativeSmoothCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeSmoothCurveTo(0, 1, 1);
	}
	
	public function testDrawRelativeSmoothCurveTo() {
		$this->attribute->drawRelativeSmoothCurveTo(0, 1, 5, 6);
		$this->assertEquals('s0,1 5,6', $this->attribute->getValue());
	}
	
	public function testDrawQuadraticBezierCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawQuadraticBezierCurveTo(0, 1, 1);
	}
	
	public function testDrawQuadraticBezierCurveTo() {
		$this->attribute->drawQuadraticBezierCurveTo(0, 1, 5, 6);
		$this->assertEquals('Q0,1 5,6', $this->attribute->getValue());
	}
	
	public function testDrawRelativeQuadraticBezierCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeQuadraticBezierCurveTo(0, 1, 1);
	}
	
	public function testDrawRelativeQuadraticBezierCurveTo() {
		$this->attribute->drawRelativeQuadraticBezierCurveTo(0, 1, 5, 6);
		$this->assertEquals('q0,1 5,6', $this->attribute->getValue());
	}
	
	public function testDrawSmoothQuadraticBezierCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawSmoothQuadraticBezierCurveTo(0, 1, 1);
	}
	
	public function testDrawSmoothQuadraticBezierCurveTo() {
		$this->attribute->drawSmoothQuadraticBezierCurveTo(0, 1, 5, 6);
		$this->assertEquals('T0,1 5,6', $this->attribute->getValue());
	}
	
	public function testDrawRelativeSmoothQuadraticBezierCurveToException() {
		$this->expectException(InvalidArgumentException::class);
		
		$this->attribute->drawRelativeSmoothQuadraticBezierCurveTo(0, 1, 1);
	}
	
	public function testDrawRelativeSmoothQuadraticBezierCurveTo() {
		$this->attribute->drawRelativeSmoothQuadraticBezierCurveTo(0, 1, 5, 6, 8, 10);
		$this->assertEquals('t0,1 5,6 8,10', $this->attribute->getValue());
	}
	
	public function testDrawEllipticalArc() {
		$this->attribute->drawEllipticalArc(9, 6, 0, 1, 1, 3, 5);
		$this->assertEquals('A9,6 0 1 1 3,5', $this->attribute->getValue());
	}
	
	public function testDrawRelativeEllipticalArc() {
		$this->attribute->drawRelativeEllipticalArc(9, 6, 0, 1, 1, 3, 5);
		$this->assertEquals('a9,6 0 1 1 3,5', $this->attribute->getValue());
	}
	
	public function testDrawClosePath() {
		$this->attribute->drawClosePath();
		$this->assertEquals('Z', $this->attribute->getValue());
	}
	
	public function testDrawRelativeClosePath() {
		$this->attribute->drawRelativeClosePath();
		$this->assertEquals('z', $this->attribute->getValue());
	}
}