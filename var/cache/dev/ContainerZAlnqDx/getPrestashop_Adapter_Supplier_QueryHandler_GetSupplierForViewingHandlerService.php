<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.supplier.query_handler.get_supplier_for_viewing_handler' shared service.

return $this->services['prestashop.adapter.supplier.query_handler.get_supplier_for_viewing_handler'] = new \PrestaShop\PrestaShop\Adapter\Supplier\QueryHandler\GetSupplierForViewingHandler(($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_CURRENCY_DEFAULT"));
