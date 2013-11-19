<?php

/*
 * This is just testing trash code, for clearing the folders before launching the script
 * Uncomment it if you wanna clear all the folders for each execution of testIt.php
 */

/* 
$rmclass = new rmclass();
$rmclass->rrmdir(dirname(__FILE__) . "/thumbnails/banners/");
$rmclass->rrmdir(dirname(__FILE__) . "/thumbnails/categories/");

class rmclass
{
	function rrmdir($dir)
	{
		if (is_dir($dir))
		{
			$objects = scandir($dir);
			foreach ($objects as $object)
			{
				if ($object != "." && $object != "..")
				{
					if (filetype($dir."/".$object) == "dir") self::rrmdir($dir."/".$object);
					else unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}
}
*/

require_once(dirname(__FILE__) . "/code/factories/imageBanner.php");
require_once(dirname(__FILE__) . "/code/factories/imageCategory.php");

echo "TASK STARTED" . PHP_EOL;

//We take random images from the WWW to test out the tool
$urlBanner = "http://www.thefunnyblog.org/wp-content/uploads/2012/09/meme-challenge-accepted-full-hd-wallpaper-download-1920-1080.jpg";
$urlCategory = "download.ultradownloads.com.br/wallpaper/276162_Papel-de-Parede-Meme-Cereal-Guy-Cuspindo_1400x1050.jpg";
//Factores instancialization
$imageBannerFactory = new Factories_ImageBanner();
$imageCategoryFactory = new Factories_ImageCategory();
//Generate a few thumbnails for each type of images
for($i = 0; $i < 3; $i ++) {
	$imageBannerFactory->makeThumbNails($i, $urlBanner);
	echo "BANNER THUMBNAILS GENERATED" . PHP_EOL;
	$imageCategoryFactory->makeThumbNails($i, $urlCategory);
	echo "CATEGORY THUMBNAILS GENERATED" . PHP_EOL;
}

echo "TASK FINISHED" . PHP_EOL;