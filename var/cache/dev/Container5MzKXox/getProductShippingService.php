<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Product\ProductShipping' shared autowired service.

@trigger_error('The "PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->privates['PrestaShopBundle\\Form\\Admin\\Product\\ProductShipping'] = new \PrestaShopBundle\Form\Admin\Product\ProductShipping(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['prestashop.adapter.data_provider.warehouse'] ?? $this->load('getPrestashop_Adapter_DataProvider_WarehouseService.php')), ($this->services['prestashop.adapter.data_provider.carrier'] ?? $this->load('getPrestashop_Adapter_DataProvider_CarrierService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_DIMENSION_UNIT"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_WEIGHT_UNIT"));
