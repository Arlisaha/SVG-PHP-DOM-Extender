<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\In2Attr;

class In2AttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new In2Attr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('in2', $this->attribute->name);
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