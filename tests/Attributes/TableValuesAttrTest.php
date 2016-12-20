<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\TableValuesAttr;

class TableValuesAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new TableValuesAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('tableValues', $this->attribute->name);
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