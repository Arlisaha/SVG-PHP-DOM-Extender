<?php

namespace SVGPHPDOMExtender\Elements\Shapes\Animations;

use SVGPHPDOMExtender\Elements\AbstractElement;

/*Animate color tag.*/
class AnimateColorElement extends AbstractAnimationElement
{
	protected static $name = 'animateColor';
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
	 * @return Array : List of required properties.
	 */
	protected function requiredProperties() {
		return [
		];
	}
}