<?php

namespace SVGPHPDOMExtender\Elements\Animations;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Animate color tag.*/
class AnimateMotionElement extends AbstractAnimationElement
{
	protected static $name = 'animateMotion';
	/**
	 * https://www.w3.org/TR/SVG/animate.html#CalcModeAttribute
	 * 
	 * @var CalcModeAttr $calcMode : Specifies the interpolation mode for the animation.
	 */
	protected $calcMode;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#ValuesAttribute
	 * 
	 * @var ValuesAttr $by : A semicolon-separated list of one or more values.
	 */
	protected $values;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#KeyTimesAttribute
	 * 
	 * @var KeyTimesAttr $keyTimes : A semicolon-separated list of time values used to control the pacing of the animation.
	 */
	protected $keyTimes;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#KeySplinesAttribute
	 * 
	 * @var KeySplinesAttr $keySplines : A set of Bézier control points associated with the ‘keyTimes’ list, defining a cubic Bézier function that controls interval pacing.
	 */
	protected $keySplines;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#FromAttribute
	 * 
	 * @var FromAttr $from : Specifies the starting value of the animation.
	 */
	protected $from;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#ToAttribute
	 * 
	 * @var ToAttr $to : Specifies the ending value of the animation.
	 */
	protected $to;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#ByAttribute
	 * 
	 * @var ByAttr $by : Specifies a relative offset value for the animation.
	 */
	protected $by;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#AdditiveAttribute
	 * 
	 * @var AdditiveAttr $additive : Controls whether or not the animation is additive.
	 */
	protected $additive;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#AccumulateAttribute
	 * 
	 * @var AccumulateAttr $accumulate : Controls whether or not the animation is cumulative.
	 */
	protected $accumulate;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#PathAttribute
	 * 
	 * @var PathAttr $path : The motion path, expressed in the same format and interpreted the same way as the ‘d’ attribute on the ‘path’ element.
	 */
	protected $path;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#KeyPointsAttribute
	 * 
	 * @var KeyPointsAttr $keyPoints : ‘keyPoints’ takes a semicolon-separated list of floating point values between 0 and 1 and indicates how far along the motion path the object shall move at the moment in time specified by corresponding ‘keyTimes’ value.
	 */
	protected $keyPoints;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#RotateAttribute
	 * 
	 * @var RotateAttr $rotate : The ‘rotate’ attribute post-multiplies a supplemental transformation matrix onto the CTM of the target element to apply a rotation transformation about the origin of the current user coordinate system.
	 */
	protected $rotate;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#OriginAttribute
	 * 
	 * @var OriginAttr $origin.
	 */
	protected $origin;
	
	/**
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}