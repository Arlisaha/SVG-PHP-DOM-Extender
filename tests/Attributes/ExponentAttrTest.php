<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\ExponentAttr;

class ExponentAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new ExponentAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('exponent', $this->attribute->name);
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