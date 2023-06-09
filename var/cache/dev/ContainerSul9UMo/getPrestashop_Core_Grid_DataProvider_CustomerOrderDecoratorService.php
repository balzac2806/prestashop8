<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_provider.customer_order_decorator' shared service.

return $this->services['prestashop.core.grid.data_provider.customer_order_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CustomerOrderGridDataFactoryDecorator(($this->services['prestashop.core.grid.data_provider.customer_order'] ?? $this->load('getPrestashop_Core_Grid_DataProvider_CustomerOrderService.php')), ($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->currency->iso_code);
