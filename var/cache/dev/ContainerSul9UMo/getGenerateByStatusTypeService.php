<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Order\Invoices\GenerateByStatusType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\Invoices\\GenerateByStatusType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Invoices\GenerateByStatusType(($this->services['prestashop.core.form.choice_provider.order_state_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php')), ($this->services['prestashop.core.api.order_invoice.repository'] ?? $this->load('getPrestashop_Core_Api_OrderInvoice_RepositoryService.php'))->countByOrderState(($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID()));
