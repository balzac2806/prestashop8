<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory' shared service.

$this->services['prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory'] = $instance = new \PrestaShop\Module\BlockWishList\Grid\Definition\CurrentMonthStatisticsGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
