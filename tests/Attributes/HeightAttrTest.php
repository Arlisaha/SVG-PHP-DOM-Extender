<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\HeightAttr;

class HeightAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new HeightAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('height', $this->attribute->name);
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