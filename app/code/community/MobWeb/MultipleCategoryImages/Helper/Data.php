<?php

class MobWeb_MultipleCategoryImages_Helper_Data extends Mage_Core_Helper_Abstract {
	public $categoryCustomImageAttributeCode = 'image_custom_';
	public $numberOfCustomImageFields = 5;

	public function log($msg, $level = NULL)
	{
	    Mage::log($msg, $level, $this->_getModuleName() . '.log');
	}

	public function getCustomCategoryImages(Mage_Catalog_Model_Category $category)
	{
		// Get the category images
		$categoryImages = array();
		for($i = 1; $i <= $this->numberOfCustomImageFields; $i++) {
			if ($categoryImage = $category->getData($this->categoryCustomImageAttributeCode . $i)) {
			    $categoryImages['image_custom_' . $i] = Mage::getBaseUrl('media').'catalog/category/' . $categoryImage;
			}

		}

		return $categoryImages;
	}
}