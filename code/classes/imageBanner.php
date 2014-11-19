<?php
require_once(dirname(__FILE__) . "/image.php");
 
abstract class Classes_ImageBanner extends Classes_Image
{
	protected abstract static function instantiate(); //this is just for method chaining

	protected function getFolder() {
		return "banners";
	}
}