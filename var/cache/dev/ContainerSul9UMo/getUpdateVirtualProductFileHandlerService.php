<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\UpdateVirtualProductFileHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\CommandHandler\\UpdateVirtualProductFileHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\CommandHandler\UpdateVirtualProductFileHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Update\\VirtualProductUpdater'] ?? $this->load('getVirtualProductUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Repository\\VirtualProductFileRepository'] ?? $this->load('getVirtualProductFileRepositoryService.php')));
