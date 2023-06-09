<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\GetCombinationStockMovementsHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\QueryHandler\\GetCombinationStockMovementsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\QueryHandler\GetCombinationStockMovementsHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] ?? $this->load('getStockAvailableRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockMovementRepository'] ?? $this->load('getStockMovementRepositoryService.php')), ($this->services['translator'] ?? $this->getTranslatorService()));
