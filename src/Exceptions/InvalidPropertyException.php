<?php

namespace SVGPHPDOMExtender\Exceptions;

use \Exception;

/*Custom Exception class thrown when the XML node name is wrong.*/
class InvalidPropertyException extends Exception
{
	public function __construct($message, $code = 0, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}
}