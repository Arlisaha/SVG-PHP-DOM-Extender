<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\XmlnsXlinkAttr;

class XmlnsXlinkAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new XmlnsXlinkAttr();
	}
	
	public function testConstruct() {
		$this->assertEquals('xmlns:xlink', $this->attribute->name);
		$this->assertEquals('http://www.w3.org/1999/xlink', $this->attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test2');
		
		$this->assertEquals('test2', $this->attribute->value);
	}
	
	public function testGetValue() {
		$this->assertEquals('http://www.w3.org/1999/xlink', $this->attribute->getValue());
	}
}