<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Product\Options\VisibilityType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Options\\VisibilityType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Options\VisibilityType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.product_visibility_choice_provider'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ProductVisibilityChoiceProviderService.php')));
