<?php
require_once(dirname(__FILE__) . "/classes/imageCategory.php");

class CategoryMediumThumbNail extends Classes_ImageCategory
{
	//this is just for method chaining
	public static function instantiate() {
		return new self();
	}

	protected function getSize() {
		return array("height" => 92, "width" => 62);
	}
	
	protected function getType() {
		return "medium";
	}
}