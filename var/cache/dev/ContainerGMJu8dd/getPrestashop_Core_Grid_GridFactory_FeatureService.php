<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.grid_factory.feature' shared service.

return $this->services['prestashop.core.grid.grid_factory.feature'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Definition\\Factory\\FeatureGridDefinitionFactory'] ?? $this->load('getFeatureGridDefinitionFactoryService.php')), ($this->services['prestashop.core.grid.data.factory.feature'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_FeatureService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
