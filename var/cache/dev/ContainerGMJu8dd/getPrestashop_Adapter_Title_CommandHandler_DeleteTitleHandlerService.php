<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.title.command_handler.delete_title_handler' shared autowired service.

return $this->services['prestashop.adapter.title.command_handler.delete_title_handler'] = new \PrestaShop\PrestaShop\Adapter\Title\CommandHandler\DeleteTitleHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Title\\Repository\\TitleRepository'] ?? $this->load('getTitleRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\TitleImageUploader'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\TitleImageUploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader())));
