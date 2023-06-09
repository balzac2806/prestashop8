<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GiftOptionsType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\OrderPreferences\\GiftOptionsType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\GiftOptionsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService())->getDefaultCurrencyIsoCode(), ($this->services['prestashop.adapter.data_provider.tax'] ?? $this->load('getPrestashop_Adapter_DataProvider_TaxService.php'))->getTaxRulesGroupChoices(), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
