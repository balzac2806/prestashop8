<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_handler.root_category_form_data_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_handler.root_category_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\RootCategoryFormDataHandler(($this->services['prestashop.core.command_bus'] ?? $this->load('getPrestashop_Core_CommandBusService.php')), ($this->services['prestashop.adapter.image.uploader.category_cover_image_uploader'] ?? ($this->services['prestashop.adapter.image.uploader.category_cover_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryCoverImageUploader())), ($this->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader'] ?? ($this->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryThumbnailImageUploader())), ($this->services['prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader'] ?? $this->load('getPrestashop_Adapter_Image_Uploader_CategoryMenuThumbnailImageUploaderService.php')), ($this->privates['PrestaShop\\PrestaShop\\Core\\Category\\Provider\\MenuThumbnailAvailableKeyProvider'] ?? $this->load('getMenuThumbnailAvailableKeyProviderService.php')));
