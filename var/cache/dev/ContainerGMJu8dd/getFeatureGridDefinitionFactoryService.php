<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Grid\Definition\Factory\FeatureGridDefinitionFactory' shared autowired service.

$this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Definition\\Factory\\FeatureGridDefinitionFactory'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\FeatureGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
