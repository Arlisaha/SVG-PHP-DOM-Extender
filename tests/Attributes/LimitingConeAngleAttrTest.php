<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\LimitingConeAngleAttr;

class LimitingConeAngleAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new LimitingConeAngleAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('limitingConeAngle', $this->attribute->name);
		$this->assertEquals('test', $this->attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test2');
		
		$this->assertEquals('test2', $this->attribute->value);
	}
	
	public function testGetValue() {
		$this->assertEquals('test', $this->attribute->getValue());
	}
}