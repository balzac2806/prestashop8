<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Address\CustomerAddressType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Address\\CustomerAddressType'] = new \PrestaShopBundle\Form\Admin\Sell\Address\CustomerAddressType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] ?? ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CountryStateByIdChoiceProvider())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->country->id, ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
