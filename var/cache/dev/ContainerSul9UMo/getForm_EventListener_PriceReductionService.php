<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.event_listener.price_reduction' shared autowired service.

return $this->services['form.event_listener.price_reduction'] = new \PrestaShopBundle\Form\Admin\Type\EventListener\PriceReductionListener(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));
