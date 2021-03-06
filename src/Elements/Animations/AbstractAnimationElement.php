<?php

namespace SVGPHPDOMExtender\Elements\Animations;

use SVGPHPDOMExtender\Elements\AbstractElementWithConditionalProcessingAttributes;

/*Abstract animate element.*/
abstract class AbstractAnimationElement extends AbstractElementWithConditionalProcessingAttributes
{
	/**
	 * https://www.w3.org/TR/SVG/animate.html#BeginAttribute
	 * 
	 * @var BeginAttr $begin : Defines when the element should begin.
	 */
	protected $begin;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#DurAttribute
	 * 
	 * @var DurAttr $dur : Specifies the simple duration.
	 */
	protected $dur;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#EndAttribute
	 * 
	 * @var EndAttr $end : Defines an end value for the animation that can constrain the active duration.
	 */
	protected $end;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#MinAttribute
	 * 
	 * @var MinAttr $min : Specifies the minimum value of the active duration.
	 */
	protected $min;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#MaxAttribute
	 * 
	 * @var MaxAttr $max : Specifies the maximum value of the active duration.
	 */
	protected $max;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#RestartAttribute
	 * 
	 * @var RestartAttr $restart : Hox the animation should be restarted.
	 */
	protected $restart;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#RepeatCountAttribute
	 * 
	 * @var RepeatCountAttr $repeatCount : Specifies the number of iterations of the animation function.
	 */
	protected $repeatCount;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#RepeatDurAttribute
	 * 
	 * @var RepeatDurAttr $repeatDur : Specifies the total duration for repeat.
	 */
	protected $repeatDur;
	/**
	 * https://www.w3.org/TR/SVG/animate.html#FillAttribute
	 * 
	 * @var FillAttr $fill.
	 */
	protected $fill;
}