<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductStatusHandler' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\UpdateProductStatusHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductStatusHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductIndexationUpdater'] ?? $this->load('getProductIndexationUpdaterService.php')));
