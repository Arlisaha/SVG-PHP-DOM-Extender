<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\BeginAttr;

class BeginAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new BeginAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('begin', $this->attribute->name);
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