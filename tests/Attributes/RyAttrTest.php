<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\RyAttr;

class RyAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new RyAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('ry', $this->attribute->name);
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