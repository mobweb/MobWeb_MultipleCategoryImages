<?php

$installer = $this;
$installer->startSetup();

/*
 *
 * Add the custom attributes to the category object
 *
 */
$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

for($i = 1; $i <= Mage::helper('multiplecategoryimages')->numberOfCustomImageFields; $i++) {
	$installer->addAttribute('catalog_category', Mage::helper('multiplecategoryimages')->categoryCustomImageAttributeCode . $i, array(
		'backend' => 'catalog/category_attribute_backend_image',
		'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'type' => 'varchar',
		'input' => 'image',
		'visible' => 1,
		'visible_on_front'  => 1,
		'required' => 0,
		'group' => 'General',
		'label' => 'Additional image',
	));

	$installer->addAttributeToGroup(
		$entityTypeId,
		$attributeSetId,
		$attributeGroupId,
		Mage::helper('multiplecategoryimages')->categoryCustomImageAttributeCode . $i,
		900 + $i
	);
}

$installer->endSetup();