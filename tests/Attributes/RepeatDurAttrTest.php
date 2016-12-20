<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\RepeatDurAttr;

class RepeatDurAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new RepeatDurAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('repeatDur', $this->attribute->name);
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