<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Order\ChangeOrdersStatusType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\ChangeOrdersStatusType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\ChangeOrdersStatusType(($this->services['prestashop.core.form.choice_provider.order_state_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php')));
