<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\PreserveAspectRatioAttr;

class PreserveAspectRatioAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new PreserveAspectRatioAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('preserveAspectRatio', $this->attribute->name);
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