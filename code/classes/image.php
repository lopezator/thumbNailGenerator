<?php
require_once(dirname(__FILE__) . "/../../lib/PhpThumb/ThumbLib.inc.php");

abstract class Classes_Image 
{	
	protected abstract function getFolder();
	protected abstract function getSize();
	protected abstract function getType();
	
	public function makeThumbNail($id, $urlFrom) {
		$path = $this->getPath($id);
		mkdir($path, 0755, true);
		$this->_createImage($path, $urlFrom);
	}
	
	protected function getPath($id) {
		return $this->_getBasePath() . "/" . $id . "/";
	}
	
	private function _getBasePath()
	{
		return dirname(__FILE__) . "/../../thumbnails/" . $this->getFolder();
	}
	
	private function _createImage($path, $urlFrom)
	{
		$type = $this->getType();
		$size = $this->getSize();
		$image = PhpThumbFactory::create($urlFrom);
		$image = $this->_resizeImage($image, $size["width"], $size["height"], true);
		$image->save($path . $type . "." . strtolower($image->getFormat()));
	}
	
	private function _resizeImage($image, $newWidth, $newHigh, $ratio)
	{
		$dimensions = $image->getCurrentDimensions();
		if ($dimensions['height'] != $newHigh || $dimensions['width'] != $newWidth) {
			$image->setOptions(array('resizeUp' => true));
			$image = $image->adaptiveResize($newWidth, $newHigh);
		}
		return $image;
	}
}