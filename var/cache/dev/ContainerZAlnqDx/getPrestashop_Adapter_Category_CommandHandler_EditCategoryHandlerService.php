<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.category.command_handler.edit_category_handler' shared autowired service.

return $this->services['prestashop.adapter.category.command_handler.edit_category_handler'] = new \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\EditCategoryHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\CategoryImageUploader'] ?? $this->load('getCategoryImageUploaderService.php')), ($this->privates['PrestaShop\\PrestaShop\\Core\\Category\\Provider\\MenuThumbnailAvailableKeyProvider'] ?? $this->load('getMenuThumbnailAvailableKeyProviderService.php')));
