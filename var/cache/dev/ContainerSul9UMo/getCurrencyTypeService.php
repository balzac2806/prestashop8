<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Currencies\\CurrencyType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Currencies\CurrencyType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.currency_name_by_iso_code'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CurrencyNameByIsoCodeService.php'))->getChoices(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService())->isUsed());
