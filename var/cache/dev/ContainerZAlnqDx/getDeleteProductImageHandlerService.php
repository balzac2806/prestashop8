<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler\DeleteProductImageHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\CommandHandler\\DeleteProductImageHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler\DeleteProductImageHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Update\\ProductImageUpdater'] ?? $this->load('getProductImageUpdaterService.php')));
