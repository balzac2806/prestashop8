<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Address\\ManufacturerAddressType'] = new \PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.adapter.form.choice_provider.manufacturer_name_by_id'] ?? $this->load('getPrestashop_Adapter_Form_ChoiceProvider_ManufacturerNameByIdService.php'))->getChoices(), ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] ?? ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CountryStateByIdChoiceProvider())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->country->id, ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
