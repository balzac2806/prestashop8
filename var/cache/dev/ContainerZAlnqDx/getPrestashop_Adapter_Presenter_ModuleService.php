<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.presenter.module' shared service.

return $this->services['prestashop.adapter.presenter.module'] = new \PrestaShop\PrestaShop\Adapter\Presenter\Module\ModulePresenter(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->currency, ($this->services['prestashop.adapter.formatter.price'] ?? ($this->services['prestashop.adapter.formatter.price'] = new \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter())));
