<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.currency_name_by_iso_code' shared service.

return $this->services['prestashop.core.form.choice_provider.currency_name_by_iso_code'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyNameByIsoCodeChoiceProvider(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale())->getAllCurrencies());
