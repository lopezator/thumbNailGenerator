<?php
require_once(dirname(__FILE__) . "/classes/imageBanner.php");

class BannerSmallThumbNail extends Classes_ImageBanner
{
	//this is just for method chaining
	public static function instantiate() {
		return new self();
	}

	protected function getSize() {
		return array("height" => 70, "width" => 62);
	}
	
	protected function getType() {
		return "small";
	}
}