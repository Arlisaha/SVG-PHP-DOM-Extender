<?php

namespace SVGPHPDOMExtender\Elements\Filters;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*To define a light source.*/
class FeSpotLightElement extends AbstractElement
{
	protected static $name = 'feSpotLight';
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightXAttribute
	 * 
	 * @var XAttr $x : X location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $x;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightYAttribute
	 * 
	 * @var YAttr $y : Y location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $y;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightZAttribute
	 * 
	 * @var ZAttr $z : Z location for the light source in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element.
	 */
	protected $z;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightPointsAtXAttribute
	 * 
	 * @var PointsAtXAttr $pointsAtX : X location in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element of the point at which the light source is pointing.
	 */
	protected $pointsAtX;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightPointsAtYAttribute
	 * 
	 * @var PointsAtYAttr $pointsAtY : Y location in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element of the point at which the light source is pointing.
	 */
	protected $pointsAtY;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightPointsAtZAttribute
	 * 
	 * @var PointsAtZAttr $pointsAtZ : Z location in the coordinate system established by attribute ‘primitiveUnits’ on the ‘filter’ element of the point at which the light source is pointing.
	 */
	protected $pointsAtZ;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightSpecularExponentAttribute
	 * 
	 * @var SpecularExponentAttr $specularExponent : Exponent value controlling the focus for the light source.
	 */
	protected $specularExponent;
	/**
	 * https://www.w3.org/TR/SVG/filters.html#feSpotLightLimitingConeAngleAttribute
	 * 
	 * @var LimitingConeAngleAttr $limitingConeAngle : A limiting cone which restricts the region where the light is projected.
	 */
	protected $limitingConeAngle;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
			'x',
			'y',
			'z',
			'pointsAtX',
			'pointsAtY',
			'pointsAtZ',
		];
	}
}