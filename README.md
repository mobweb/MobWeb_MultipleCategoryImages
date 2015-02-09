# MobWeb_MultipleCategoryImages extension for Magento

A simple Magento extension that adds a number of extra image fields to the category object.

**Notice**: This extension in itself does not display the custom images anywhere, you will have to implement the display yourself in your template as required.

## Usage

Set `$numberOfCustomImageFields` in `app/code/community/MobWeb/MultipleCategoryImages/sql/multiplecategoryimages_setup/mysql4-install-0.1.0.php` to the number of image fields that you'd like to add.

In the frontend, use `Mage::helper('multiplecategoryimages')->getCustomCategoryImages($_category);` to get an array containing the URLs to the custom images.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/). Afterwards make sure that you re-create the index for the `Category Flat Data`, otherwise the custom images won't be available in the frontend!

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).