<?php 
require_once(dirname(__FILE__) . "/image.php");
require_once(dirname(__FILE__) . "/../categoryMediumThumbNail.php");
require_once(dirname(__FILE__) . "/../categorySmallThumbNail.php");
require_once(dirname(__FILE__) . "/../categoryTinyThumbNail.php");

class Factories_ImageCategory extends AbstractFactories_Image 
{
	public function makeThumbNails($id, $urlFrom) {
		CategoryMediumThumbNail::instantiate()->makeThumbNail($id, $urlFrom);
		CategorySmallThumbNail::instantiate()->makeThumbNail($id, $urlFrom);
		CategoryTinyThumbNail::instantiate()->makeThumbNail($id, $urlFrom);
	}
}