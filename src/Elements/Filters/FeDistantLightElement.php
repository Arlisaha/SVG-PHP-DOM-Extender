<?php

namespace SVGPHPDOMExtender\Elements\Filters;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a distant light to the filter.*/
class FeDistantLightElement extends AbstractElement
{
	protected static $name = 'feDistantLight';
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feDistantLightAzimuthAttribute
	 * 
	 * @var AzimuthAttr $azimuth : Direction angle for the light source on the XY plane (clockwise), in degrees from the x axis.
	 */
	protected $azimuth;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feDistantLightElevationAttribute
	 * 
	 * @var ElevationAttr $elevation : Direction angle for the light source from the XY plane towards the z axis, in degrees.
	 */
	protected $elevation;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'azimuth',
			'elevation',
		];
	}
}