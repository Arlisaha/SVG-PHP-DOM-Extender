<?php

namespace SVGPHPDOMExtender\Elements;

use \DOMElement;

/*Drawing arrowheads or poylmarkers for path, line, polyline or polygon.*/
class MarkerElement extends AbstractElement
{
	protected static $name = 'marker';
	/**
	 * https://www.w3.org/TR/SVG/coords.html#PreserveAspectRatioAttribute
	 * 
	 * @var PreserveAspectRatioAttr $preserveAspectRatio : The id of the group for this use element.
	 */
	protected $preserveAspectRatio;
	/**
	 * https://www.w3.org/TR/SVG/coords.html#ViewBoxAttribute
	 * 
	 * @var ViewBoxAttr $viewBox : Indicates whether or not to force uniform scaling.
	 */
	protected $viewBox;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#MarkerElementRefXAttribute
	 * 
	 * @var RefXAttr $refX : The x-axis coordinate of the reference point which is to be aligned exactly at the marker position.
	 */
	protected $refX;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#MarkerElementRefYAttribute
	 * 
	 * @var RefYAttr $refY : The y-axis coordinate of the reference point which is to be aligned exactly at the marker position.
	 */
	protected $refY;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#MarkerUnitsAttribute
	 * 
	 * @var MarkerUnitsAttr $markerUnits : Defines the coordinate system for attributes ‘markerWidth’, ‘markerHeight’ and the contents of the ‘marker’.
	 */
	protected $markerUnits;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#MarkerWidthAttribute
	 * 
	 * @var MarkerWidthAttr $markerWidth : Represents the width of the viewport into which the marker is to be fitted when it is rendered.
	 */
	protected $markerWidth;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#MarkerHeightAttribute
	 * 
	 * @var MarkerHeightAttr $markerHeight : Represents the height of the viewport into which the marker is to be fitted when it is rendered.
	 */
	protected $markerHeight;
	/**
	 * https://www.w3.org/TR/SVG/painting.html#OrientAttribute
	 * 
	 * @var ViewBoxAttr $viewBox : Indicates how the marker is rotated.
	 */
	protected $orient;
}