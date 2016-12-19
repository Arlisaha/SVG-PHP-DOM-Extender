<?php

namespace SVGPHPDOMExtender\Tests;

use PHPUnit\Framework\TestCase;
use SVGPHPDOMExtender\SvgDocument;

class SvgDocumentTest extends TestCase
{
	public function testCreateRootNode() {
		$svgDocument = new SvgDocument();
		$svgElement = $svgDocument->createRootNode();
		
		$this->assertInstanceOf('\DOMElement', $svgDocument->firstChild);
		$this->assertEquals('svg', $svgDocument->firstChild->tagName);
	}
}