<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.title' shared service.

$this->services['prestashop.core.grid.definition.factory.title'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\TitleGridDefinitionFactory(($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.core.form.choice_provider.gender_choice_provider'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_GenderChoiceProviderService.php')));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
