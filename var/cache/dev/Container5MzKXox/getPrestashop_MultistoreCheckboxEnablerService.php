<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.multistore_checkbox_enabler' shared autowired service.

return $this->services['prestashop.multistore_checkbox_enabler'] = new \PrestaShopBundle\Service\Form\MultistoreCheckboxEnabler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())), ($this->services['prestashop.core.admin.multistore'] ?? $this->getPrestashop_Core_Admin_MultistoreService()), ($this->services['form.form_cloner'] ?? ($this->services['form.form_cloner'] = new \PrestaShopBundle\Form\FormCloner())));
