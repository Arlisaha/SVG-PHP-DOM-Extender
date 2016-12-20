<?php

namespace SVGPHPDOMExtender\Tests\Attributes;

use \BadMethodCallException;
use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\Attributes\StyleAttr;
use SVGPHPDOMExtender\Exceptions\InvalidPropertyException;

class StyleAttrTest extends TestCase
{
	protected $attribute;
	
	public function setUp() {
		$this->attribute = new StyleAttr();
	}
	
	public function testConstruct() {
		$attribute = new StyleAttr('test');
		$this->assertEquals('style', $attribute->name);
		$this->assertEquals('test', $attribute->value);
	}
	
	public function testSetValue() {
		$this->attribute->setValue('test');
		
		$this->assertEquals('test', $this->attribute->value);
	}
	
	public function testGetValue() {
		$attribute = new StyleAttr('test');
		$this->assertEquals('test', $attribute->getValue());
	}
	
	public function testIsStylePropertyValid() {
		$this->assertFalse($this->attribute->isStylePropertyValid('invalid property'));
		$this->assertTrue($this->attribute->isStylePropertyValid('stroke'));
	}
	
	public function testIsStylePropertyAccessorNameValid() {
		$this->assertFalse($this->attribute->isStylePropertyAccessorNameValid('invalid property'));
		$this->assertTrue($this->attribute->isStylePropertyAccessorNameValid('Stroke'));
	}
	
	public function testIstylePropertyExistsException() {
		$this->expectException(InvalidPropertyException::class);
		
		$this->attribute->stylePropertyExists('invalid property name');
	}
	
	public function testIstylePropertyExists() {
		$this->attribute->setValue('stroke:black;fill:red;');
		
		$this->assertFalse($this->attribute->stylePropertyExists('kerning'));
		$this->assertTrue($this->attribute->stylePropertyExists('fill'));
	}
	
	public function testSetPropertyException() {
		$this->expectException(BadMethodCallException::class);
		
		$this->attribute->setInvalidProperty('invalid');
	}
	
	public function testSetProperty() {
		$this->attribute->setStroke('black');
		$this->attribute->setFill('red');
		$this->assertEquals('stroke:black;fill:red;', $this->attribute->value);
		
		$this->attribute->setStroke('green');
		$this->assertEquals('stroke:green;fill:red;', $this->attribute->value);
	}
	
	public function testGetPropertyException() {
		$this->expectException(BadMethodCallException::class);
		
		$this->attribute->getInvalidProperty();
	}
	
	public function testGetProperty() {
		$this->attribute->setValue('stroke:black;');
		
		$this->assertEquals('black', $this->attribute->getStroke());
		$this->assertNull($this->attribute->getFill());
	}
}