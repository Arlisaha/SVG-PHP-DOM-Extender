<?php

namespace SVGPHPDOMExtender\Attributes;

use \BadMethodCallException;
use SVGPHPDOMExtender\Exceptions\InvalidPropertyException;

class StyleAttr extends AbstractAttr
{
	public static $name = 'style';

	private static $propertiesMapper = [
		'stroke'                   => 'stroke',
		'strokewidth'              => 'stroke-width',
		'strokedasharray'          => 'stroke-dasharray',
		'fill'                     => 'fill',
		'fillopacity'              => 'fill-opacity',
		'textanchor'               => 'text-anchor',
		'kerning'                  => 'kerning',
		'letterspacing'            => 'letter-spacing',
		'wordspacing'              => 'word-spacing',
		'writingmode'              => 'writing-mode',
		'glyphorientationvertical' => 'glyph-orientation-vertical',
		'direction'                => 'direction',
		'unicodebidi'              => 'unicode-bidi',
		'fontfamily'               => 'font-family',
		'fontsize'                 => 'font-size',
		'baselineshift'            => 'baseline-shift',
 	];
 	
 	public function isStylePropertyValid($propertyName) {
 		return in_array($propertyName, self::$propertiesMapper);
 	}
 	
 	public function isStylePropertyAccessorNameValid($propertyAccessorName) {
 		return array_key_exists(strtolower($propertyAccessorName), self::$propertiesMapper);
 	}
 	
 	public function stylePropertyExists($propertyName) {
 		if(!$this->isStylePropertyValid($propertyName)) {
 			throw new InvalidPropertyException(sprintf('The property name "%s" is not valid.', $propertyName));
 		}
 		
 		return preg_match('~(?:^|;)('.$propertyName.'):~', $this->value) ? true : false;
 	}
	
	public function __call($name, $arguments) {
		//Check if given name to set is available in the list.
		if(preg_match('~(set|get)(.*)~', $name, $matches) && $this->isStylePropertyAccessorNameValid($matches[2])) {
			$property = self::$propertiesMapper[strtolower($matches[2])];
			$pieces = array_filter(explode(';', $this->value));
			$pregMatch = $this->stylePropertyExists($property);

			switch($matches[1]) {
				case 'set':
					$newPiece = $property.':'.$arguments[0];
					//If this property is already set, then we explode the string, change the attribute with its new value, and implode it.
					if($pregMatch) {
						foreach($pieces as $key => $piece) {
							 if(false !== strpos($piece, $property)) { 
								$pieces[$key] = $newPiece;
							}
						}
					} else { //If not, then it is append at the end of the current value.
						$pieces[] = $newPiece;
					}
					$this->value = implode(';', $pieces).';';
					break;
					
				case 'get':
					//If this property is set, then we return only the value.
					if($pregMatch) {
						foreach($pieces as $key => $piece) {
							if(false !== strpos($piece, $property)) {
								return explode(':', $piece)[1];
							}
						}
					} else {
						return null;
					}
					break;
			}
		} else {
			throw new BadMethodCallException(sprintf('The requested method "%s" does not exist. Only getters and setters on style properties are available.', $name));
		}
	}
}