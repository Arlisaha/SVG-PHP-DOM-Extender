<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\XmlnsAttr;

class XmlnsAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new XmlnsAttr();
	}
	
	public function testConstruct() {
		$this->assertEquals('xmlns', $this->attribute->name);
		$this->assertEquals('http://www.w3.org/2000/svg', $this->attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test2');
		
		$this->assertEquals('test2', $this->attribute->value);
	}
	
	public function testGetValue() {
		$this->assertEquals('http://www.w3.org/2000/svg', $this->attribute->getValue());
	}
}