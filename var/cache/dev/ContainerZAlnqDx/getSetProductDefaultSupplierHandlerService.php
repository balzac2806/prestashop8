<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Supplier\\CommandHandler\\SetProductDefaultSupplierHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductSupplierUpdater'] ?? $this->load('getProductSupplierUpdaterService.php')));
