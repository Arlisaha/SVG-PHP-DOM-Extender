<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\NumOctavesAttr;

class NumOctavesAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new NumOctavesAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('numOctaves', $this->attribute->name);
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