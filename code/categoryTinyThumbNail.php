<?php
require_once(dirname(__FILE__) . "/classes/imageCategory.php");

class CategoryTinyThumbNail extends Classes_ImageCategory
{
	//this is just for method chaining
	public static function instantiate() {
		return new self();
	}

	protected function getSize() {
		return array("height" => 25, "width" => 21);
	}
	
	protected function getType() {
		return "tiny";
	}
}