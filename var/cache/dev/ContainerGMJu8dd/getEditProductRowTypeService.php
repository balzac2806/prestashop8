<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Order\EditProductRowType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\EditProductRowType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\EditProductRowType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.adapter.form.choice_provider.order_invoice_by_id'] ?? $this->load('getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id);
