<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.customer.order' shared service.

$this->services['prestashop.core.grid.definition.factory.customer.order'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerOrderGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->date_format_full);

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
