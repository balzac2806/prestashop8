<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Title\CommandHandler\EditTitleHandler' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Title\\CommandHandler\\EditTitleHandler'] = new \PrestaShop\PrestaShop\Adapter\Title\CommandHandler\EditTitleHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Title\\Repository\\TitleRepository'] ?? $this->load('getTitleRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\TitleImageUploader'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\TitleImageUploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader())));
