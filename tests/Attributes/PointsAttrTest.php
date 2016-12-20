<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\PointsAttr;

class PointsAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new PointsAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('points', $this->attribute->name);
		$this->assertEquals('test', $this->attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test2');
		
		$this->assertEquals('test2', $this->attribute->value);
	}
	
	public function testGetValue() {
		$this->assertEquals('test', $this->attribute->getValue());
	}
	
	public function testAddPoint() {
		$this->attribute->setValue(null);
		
		$this->attribute->addPoint(0, 0);
		$this->assertEquals('0,0', $this->attribute->value);
		
		$this->attribute->addPoint(1, 1);
		$this->assertEquals('0,0 1,1', $this->attribute->value);
	}
}