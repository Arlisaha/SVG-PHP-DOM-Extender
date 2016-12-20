<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\SystemLanguageAttr;

class SystemLanguageAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new SystemLanguageAttr('test');
	}
	
	public function testConstruct() {
		$this->assertEquals('systemLanguage', $this->attribute->name);
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