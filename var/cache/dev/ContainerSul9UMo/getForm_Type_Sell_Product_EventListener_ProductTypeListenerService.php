<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.event_listener.product_type_listener' shared autowired service.

return $this->services['form.type.sell.product.event_listener.product_type_listener'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\ProductTypeListener(($this->services['prestashop.adapter.legacy.hook'] ?? ($this->services['prestashop.adapter.legacy.hook'] = new \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider())));
