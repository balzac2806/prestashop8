<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationItemType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationItemType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationItemType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService())->getDefaultCurrency(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id);
