<?php
require_once(dirname(__FILE__) . "/image.php");
require_once(dirname(__FILE__) . "/../bannerSmallThumbNail.php");

class Factories_ImageBanner extends AbstractFactories_Image
{
	public function makeThumbNails($urlFrom) {
		BannerSmallThumbNail::instantiate()->makeThumbNail($urlFrom);
	}
}