<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\InvoiceOptionsType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\InvoiceOptionsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.invoice_model_by_name'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_InvoiceModelByNameService.php')), ($this->services['prestashop.adapter.data_provider.order_invoice'] ?? ($this->services['prestashop.adapter.data_provider.order_invoice'] = new \PrestaShop\PrestaShop\Adapter\Invoice\OrderInvoiceDataProvider()))->getNextInvoiceNumber());
