<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Customer\CustomerType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\CustomerType'] = new \PrestaShopBundle\Form\Admin\Sell\Customer\CustomerType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Form\\ChoiceProvider\\GroupByIdChoiceProvider'] ?? $this->load('getGroupByIdChoiceProviderService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider'] ?? ($this->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\RiskByIdChoiceProvider()))->getChoices(), ($this->services['prestashop.core.b2b.b2b_feature'] ?? $this->load('getPrestashop_Core_B2b_B2bFeatureService.php'))->isActive(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_CUSTOMER_OPTIN"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['form.form_cloner'] ?? ($this->services['form.form_cloner'] = new \PrestaShopBundle\Form\FormCloner())));
