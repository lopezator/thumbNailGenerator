<?php
require_once(dirname(__FILE__) . "/image.php");
require_once(dirname(__FILE__) . "/../bannerSmallThumbNail.php");

class Factories_ImageBanner extends AbstractFactories_Image
{
	public function makeThumbNails($id, $urlFrom) {
		BannerSmallThumbNail::instantiate()->makeThumbNail($id, $urlFrom);
	}
}