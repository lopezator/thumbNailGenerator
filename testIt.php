<?php

require_once(dirname(__FILE__) . "/code/factories/imageBanner.php");
require_once(dirname(__FILE__) . "/code/factories/imageCategory.php");

echo "TASK STARTED" . PHP_EOL;

//We take random images from the WWW to test out the tool
$urlBanner = "http://www.pubzday.com/wp-content/uploads/2014/07/funny-meme-pictures-5.png";
$urlCategory = "http://dexpierta.com/wp-content/uploads/2014/05/memes-4-meme_00288337.png";

//Factores instancialization
$imageBannerFactory = new Factories_ImageBanner();
$imageCategoryFactory = new Factories_ImageCategory();

//Generate a few thumbnails for each type of images
$imageBannerFactory->makeThumbNails($urlBanner);
echo "BANNER THUMBNAILS GENERATED" . PHP_EOL;
$imageCategoryFactory->makeThumbNails($urlCategory);
echo "BANNER CATEGORIES GENERATED" . PHP_EOL;

echo "TASK FINISHED" . PHP_EOL;
