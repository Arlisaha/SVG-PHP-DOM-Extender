<?php

namespace SVGPHPDOMExtender\Attributes;

class StyleAttr extends AbstractAttr
{
	public static $name = 'style';

	private static $propertiesMapper = [
		'stroke'          => 'stroke',
		'strokewidth'     => 'stroke-width',
		'strokedasharray' => 'stroke-dasharray',
		'fill'            => 'fill',
 	];
	
	public function __call($name, $arguments) {
		//Check if given name to set is available in the list.
		if(preg_match('~(set|get)(.*)~', $name, $matches) && array_key_exists(strtolower($matches[1]), self::$propertiesMapper)) {
			$property = self::$propertiesMapper[strtolower($matches[1])];
			$pieces = explode(';', $this->value);
			$newPiece = $property.':'.$arguments[0];
			$pregMatch = preg_match('~(?:^|;)('.$property.'):~', $this->value);

			switch($matches[0]) {
				case 'get':
					//If this property is already set, then we explode the string, change the attribute with its new value, and implode it.
					if($pregMatch) {
						foreach($pieces as $key => $piece) {
							 if(strpos($piece, $property)) { 
								$pieces[$key] = $newPiece;
							}
						}
					} else { //If not, then it is append at the end of the current value.
						$pieces[] = $newPiece;
					}
					$this->value = implode(';', $pieces);
					break;
					
				case 'set':
					//If this property is set, then we return only the value.
					if($pregMatch) {
						foreach($pieces as $key => $piece) {
							if(strpos($piece, $property)) {
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