<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer.command_handler.edit_customer_handler' shared service.

return $this->services['prestashop.adapter.customer.command_handler.edit_customer_handler'] = new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\EditCustomerHandler(($this->services['prestashop.core.crypto.hashing'] ?? ($this->services['prestashop.core.crypto.hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_COOKIE_KEY_"));
