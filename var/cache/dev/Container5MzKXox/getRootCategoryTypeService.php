<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Catalog\Category\RootCategoryType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Catalog\\Category\\RootCategoryType'] = new \PrestaShopBundle\Form\Admin\Catalog\Category\RootCategoryType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.group_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_GroupByIdService.php'))->getChoices(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
